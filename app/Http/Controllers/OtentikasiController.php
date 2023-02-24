<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class OtentikasiController extends Controller
{
    public function formlogin(){
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $role = Auth::user()->level_user->kode_level;
            // dd($role);
            switch ($role) {
                case 'lv1':
                    return redirect()->intended('/dashboard');
                    break;
                case 'lv2':
                    return redirect()->intended('/siswa/dashboard');
                    break;
                case 'lv3':
                    return redirect()->intended('/walikelas');
                    break;
                case 'lv4':
                    return redirect()->intended('/kepalapemograman');
                    break;
            }
        }
        
        return back()->withErrors([
            'email' => 'Email atau Password Salah!',
            
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return redirect('/auth');
    }
    
}