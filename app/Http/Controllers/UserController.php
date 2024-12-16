<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function RegisterFormShow()
    {
        return view('Registration');
    }

    public function RegisterDataStore(Request $request)
    {
        $data = $request->all();
        
        $data = User::create($data);
        return redirect()->route('Login')->with('success','Registration Successfully!');
    }

    public function Auth(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to dashboard if successful
            return redirect()->route('products.Home')->with('success', 'Logged in successfully!');
        }

    }

    // User Logout function 
    public function logout(Request $request)
    {
        Auth::logout();
        // Invalidate the session to prevent reuse
        $request->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        $request->session()->regenerateToken() ;

        return redirect()->route('Login')->with('success','user Successfully Logout!');
    }
}
