<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;


class SiswaController extends Controller
{
    public function siswa()
    {
        $petugas = Auth::guard('petugas')->user();

        $siswa = Siswa::all();
        return view('data.data_siswa', compact('siswa', 'petugas'));
    }

    public function input()
    {
        $petugas = Auth::guard('petugas')->user();
        return view('input.input_siswa', compact('petugas'));
    }

    public function push(Request $request)
    {
        $request->validate([
            'nis' => 'required|string|max:18',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);

        Siswa::create($request->only('nis', 'nama', 'jurusan'));
        return redirect()->route('data.data_siswa')->with('success', 'Siswa berhasil ditambahkan');
    }
}