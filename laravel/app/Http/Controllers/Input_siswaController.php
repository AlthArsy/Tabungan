<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class Input_siswaController extends Controller
{
    public function data()
    {
        $Input_siswa = Input_siswa::latest()->get();
        return view('data.data_siswa', compact('siswa'));
    }

    // public function input()
    // {
    //     return view('input.input_siswa');
    // }

    // public function Push(Request $request)
    // {
    //     $request->validate([
    //         'nis' => 'required|string|max:18',
    //         'nama' => 'required|string|max:255',
    //         'jurusan' => 'required|string|max:255',
    //         // 'password' => 'required|string|max:255',
    //     ]);

    //     Siswa::create($request->only('nis', 'nama', 'jurusan','password'));
    //     return redirect()->route('data.data_siswa')->with('success', 'Siswa berhasil ditambahkan');
    // }
}
