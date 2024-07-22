<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan form login.
     *
     * @return \Illuminate\View\View
     */



    public function login()
    {
        return view('login');
    }

    public function dologin(Request $request)
    {
        // Validate the input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication was successful, get the authenticated user
            $user = Auth::user();

            // Redirect based on user level
            if ($user->isAdmin()) {
                return redirect()->route('dashboard.dashboard', ['id' => $user->id]);
            } elseif ($user->isUser()) {
                return redirect()->route('dashboard.user');
            } elseif ($user->isVerificator()) {
                return redirect()->route('verificator.index');
            } else {
                // If the user is neither admin nor a regular user, handle as per your application's requirements
            }
        } else {
            // If login failed, redirect back to the login page with an error message
            return redirect()->route('login')->with('error', 'Email or password is incorrect.');
        }
    }


    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
