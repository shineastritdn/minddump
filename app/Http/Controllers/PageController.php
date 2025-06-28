<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function welcome()
    {
        return view('minddump.welcome');
    }

    public function about()
    {
        return view('minddump.about');
    }

    public function privacy()
    {
        return view('minddump.privacy');
    }

    public function terms()
    {
        return view('minddump.terms');
    }

    public function faq()
    {
        return view('minddump.faq');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // TODO: Implement newsletter subscription logic

        return back()->with('success', 'Terima kasih telah berlangganan newsletter kami!');
    }
} 