<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function login(Request $request)
    {
        Log::info('Email received: ' . $request->email);
        session(['user_email' => $request->email]);
        Log::info('Email in session: ' . session('user_email'));
        return response()->json(['success' => 'User session created', 'email' => session('user_email')]);
    }
    

}
