<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|string|max:18',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);

        Siswa::create($request->only('nis', 'nama', 'jurusan'));
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan');
    }
}