<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function setViewLogin(){
        return view('login');
    }
    
    public function setViewRegister(){
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => $otp,
        ]);

        // Kirimkan OTP ke email pengguna
        Mail::send('emails.otp', ['otp' => $otp], function($message) use ($user) {
            $message->to($user->email)->subject('Your OTP for Registration');
        });

        // Redirect ke halaman verifikasi OTP
        return redirect()->route('otp.form')->with('success', 'Registration successful. Please check your email for OTP.');
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator)->withInput();
        }
    
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return redirect('/login')->withInput()->withErrors(['email' => 'Invalid email or password.']);
    
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect( route('login') );
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        // Cari pengguna berdasarkan email
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            // Buat pengguna baru jika tidak ditemukan
            $user = new User();
            $user->name = $googleUser->name;
            $user->email = $googleUser->email;
            $user->photo_profile = $googleUser->avatar;
            $user->password = bcrypt('random_password');
            $user->save();
        }

        // Login pengguna
        Auth::login($user);

        // Regenerasi sesi
        $request->session()->regenerate();

        // Redirect ke halaman yang sesuai setelah login
        return redirect('/dashboard');
    }

    public function showOtpForm()
    {
        return view('otp'); // Buat view 'otp' untuk menampilkan form verifikasi OTP
    }

    public function verifyOtp(Request $request)
    {
        $otp = $request->otp;

        if ($otp == Auth::user()->otp) {
            Auth::user()->update([
                'is_active' => 1,
                'otp' => null,
            ]);

            return redirect('/login')->with('success', 'OTP verified successfully. You can now login.');
        }

        return back()->with('error', 'Invalid OTP. Please try again.');
    }






}
