<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petugas;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::latest()->get();
        return view('admin.petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('admin.petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        Petugas::create($request->only('nama', 'jabatan'));
        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan');
    }
}