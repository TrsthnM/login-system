<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use function Symfony\Component\Clock\now;

class AuthController extends Controller
{
    public function loginForm(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'Successfully Logged in!');
        }

        return back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registerForm(Request $request){
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful, You are logged in!');
    }

    public function forgotPasswordForm(Request $request){
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
        ]);

        $token = Str::random(65);

        DB::table('password_forgot')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Mail::send('forgotPasswordVerify', ['token' => $token], function($message) use ($request){
            $message -> to($request->email);
            $message -> subject('Forgot Password');
        });

        return redirect()->route('login')->with('success', 'An email has been sent!');
    }

    public function forgotPasswordLinkForm($token){
        return view('forgotPasswordLink', compact('token'));
    }

    public function resetPasswordForm(Request $request){
        $request -> validate([
            'token' => ['required'],
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $first = DB::table('password_forgot')->where('email', $request->email)->where('token', $request->token)->first();

        if(is_null($first)){
            return back();
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        $first = DB::table('password_forgot')->where('email', $request->email)->where('token', $request->token)->delete();

        return redirect()->route('login')->with('success', 'Password has been changed successfully!');
    }
}
