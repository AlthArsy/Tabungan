<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Siswa;
use App\Models\Rekening;
use Illuminate\Support\Facades\DB;
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
    
    public function input()
    {
        $petugas = Auth::guard('petugas')->user();
        $rekening = Rekening::with('siswa')->orderBy('id_rekening')->get();
        return view('input.input_transaksi', compact('petugas', 'rekening'));
    }

    public function push(Request $request)
{
    $request->validate([
        'id_rekening' => 'required|exists:rekening,id_rekening',
        'jenis_transaksi' => 'required|in:setor,tarik',
        'tanggal_transaksi' => 'required|date',
        'nominal' => 'required|numeric|min:1',
    ]);

    $rekening = Rekening::findOrFail($request->id_rekening);

    if ($request->jenis_transaksi === 'tarik' && $request->nominal > $rekening->saldo) {
        return back()->withErrors(['nominal' => 'Saldo tidak cukup untuk penarikan'])->withInput();
    }

    DB::transaction(function () use ($request, $rekening) {
        $rekening->saldo = $request->jenis_transaksi === 'setor'
            ? $rekening->saldo + $request->nominal
            : $rekening->saldo - $request->nominal;
        $rekening->save();

        Transaksi::create($request->only('id_rekening', 'tanggal_transaksi', 'jenis_transaksi', 'nominal'));
    });

    return redirect()->route('data.data_transaksi')->with('success', 'Transaksi berhasil ditambahkan');
}
}
