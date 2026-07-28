<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="/css/insiswa.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Trasaksi Page</h2>
            </div>
            
            <form class="login-form" id="loginForm" method="POST" action="{{ route('transaksi.push') }}">
<div class="form-group">
    <div class="input-wrapper">
        <select id="id_rekening" name="id_rekening" required>
            <option value="" disabled selected>pilih rekening</option>
            @foreach($rekening as $r)
               <option value="{{ $r->id_rekening }}" data-saldo="{{ $r->saldo }}">
    {{ $r->siswa->nama }} (Saldo: Rp {{ number_format($r->saldo) }})
</option>
            @endforeach
        </select>
    </div>
    <span class="error-message" id="id_rekeningError"></span>
</div>
    <div class="form-group">
        <div class="input-wrapper">
            <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required>
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
        </div>
        <span class="error-message" id="tanggalTransaksiError"></span>
    </div>
    <div class="form-group">
    <div class="input-wrapper">
        <select id="jenis_transaksi" name="jenis_transaksi" required>
            <option value="" disabled selected>pilih jenis transaksi</option>
            <option value="setor">Setor</option>
            <option value="tarik">Tarik</option>
        </select>
    </div>
    <span class="error-message" id="jenisTransaksiError"></span>
    </div>
    <div class="form-group">
        <div class="input-wrapper">
            <input type="number" id="nominal" name="nominal" required>
            <label for="nominal">Nominal</label>
        </div>
        <span class="error-message" id="nominalError"></span>
    </div>
    <button type="submit" class="login-btn">
        <span class="btn-text">Buat</span>
    </button>
</form>
        </div>
    </div>

    <script src="/js/form-utils.js"></script>
    <script src="/js/trans.js"></script>
</body>
</html>