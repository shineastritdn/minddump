<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        $user = User::where('email', $request->email)->first();
        
        // Generate token
        $token = Str::random(64);
        $user->update([
            'remember_token' => $token
        ]);

        // Kirim email
        Mail::to($user->email)->send(new ResetPasswordMail($user, $token));

        return back()->with('status', 'Link reset password telah dikirim ke email Anda!');
    }

    public function showResetForm($token)
    {
        $user = User::where('remember_token', $token)->first();
        
        if (!$user) {
            return redirect()->route('password.request')
                ->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }

        return view('auth.reset-password', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::where('email', $request->email)
            ->where('remember_token', $request->token)
            ->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan atau token tidak valid.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
            'remember_token' => null
        ]);

        return redirect()->route('login')
            ->with('status', 'Password berhasil direset! Silakan login dengan password baru Anda.');
    }
} 