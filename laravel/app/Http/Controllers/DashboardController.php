<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Auth::guard('petugas')->user();

        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'halaman' => 'Page',
        ];    

        return view('dashboard', compact('petugas')) ->with($data);
    }
}
