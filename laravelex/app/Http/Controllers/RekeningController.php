<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekening;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class RekeningController extends Controller
{
    //
    public function rekening()
    {
        $petugas = Auth::guard('petugas')->user();

        $rekening = Rekening::with('siswa')->latest()->get();
        return view('data.data_rekening', compact('rekening', 'petugas'));
    }
    public function input()
    {
        $petugas = Auth::guard('petugas')->user();
        $siswa = Siswa::orderBy('nama')->get();
        return view('input.input_rekening', compact('petugas', 'siswa'));
    }

    public function push(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'saldo' => 'required|string|max:255',
            'tahun_daftar' => 'required|date',
        ]);
    
        Rekening::create($request->only('id_siswa', 'saldo', 'tahun_daftar'));
    
        return redirect()->route('data.data_rekening')->with('success', 'Rekening berhasil ditambahkan');
    }  
}
