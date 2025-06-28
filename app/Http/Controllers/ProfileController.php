<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[^<>]*$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'current_password' => ['nullable', 'required_with:new_password', 'current_password'],
            'new_password' => ['nullable', 'min:8', 'confirmed'],
        ], [
            'name.regex' => 'Nama tidak boleh mengandung karakter HTML.',
        ]);

        // Update foto profil jika ada
        if ($request->hasFile('profile_photo')) {
            // Hapus foto lama jika ada
            if ($user->profile_photo) {
                $oldPhotoPath = 'public/profile-photos/' . $user->profile_photo;
                if (Storage::exists($oldPhotoPath)) {
                    Storage::delete($oldPhotoPath);
                }
            }

            // Upload foto baru
            $photo = $request->file('profile_photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            
            // Simpan foto ke storage
            $photo->storeAs('public/profile-photos', $photoName);
            
            // Update nama foto di database
            $user->profile_photo = $photoName;
        }

        // Update password jika diisi
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->name = strip_tags($request->name);
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.edit')
            ->with('success', 'Profil berhasil diperbarui!');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = Auth::user();

        // Hapus foto profil jika ada
        if ($user->profile_photo) {
            $photoPath = 'public/profile-photos/' . $user->profile_photo;
            if (Storage::exists($photoPath)) {
                Storage::delete($photoPath);
            }
        }

        Auth::logout();
        $user->delete();

        return redirect()->route('welcome')
            ->with('success', 'Akun berhasil dihapus.');
    }
} 