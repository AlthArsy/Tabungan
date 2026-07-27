<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class input_transaksiController extends Controller
{
    public function index()
    {
        return view('input_transaksi');
    }

    public function push(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|numeric',
            'rekening' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
            'jenis_transaksi' => 'required',//ni mau pake apa
            'nominal' => 'required|numeric',
        ]);
    }
}
