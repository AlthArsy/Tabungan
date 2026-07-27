<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_petugas;

class UserpetugasController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.adminlog');
    }
    public function login(Request $requsest)
    {
        $credentials = $requsest->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        if (Auth::guard('petugas')->attempt($credentials)) {
            $requsest->session()->regenerate();
    
            return redirect()->intended(route('dashboard'))
                ->with('success', 'Selamat datang, ' . Auth::guard('petugas')->user()->username . '!');
        }

        return back()->withErrors([ 
            'username' => 'Username atau password salah',
        ])->onlyInput('username');


    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ];
        $petugas = Auth::guard('petugas')->user();
        return view('dashboard', compact('petugas'), $data);
    }

    public function logout(Request $request)
    {
        Auth::guard('petugas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/adminlogin');
    }

}
