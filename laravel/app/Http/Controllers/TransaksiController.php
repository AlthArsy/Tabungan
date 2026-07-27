<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    //
    public function transaksi()
    {
        $petugas = Auth::guard('petugas')->user();

        $transaksi = Transaksi::with('rekening.siswa')->latest()->get();
        return view('data.data_transaksi', compact('transaksi', 'petugas'));
    }
}
