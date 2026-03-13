<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function showLogin(){
        return view("auth.login");
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);

    }
    public function showRegister() {
        return view("auth.register");
    }
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required', 'email', 'max:255', Rule::unique('users', 'email'),
            ],
            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('users', 'phone'),
            ],
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ]);

        //Create new User
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        
        // auto login the user right after registration
        // Auth::login($user);

        return redirect()
            ->route('register.form')
            ->with('registration_success', true)
            ->with('registered_name', $user->name);
            
        // return redirect('/')->with('success', 'Registration successful! Welcome,' . $user->name);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success','Logged out successfully');
    }
}
