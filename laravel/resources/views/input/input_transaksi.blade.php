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
                <h2>Trasaksi - {{ $page }}</h2>
            </div>
            
            <form class="login-form" id="loginForm" novalidate>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="nama" name="nama" required autocomplete="nama">
                        <label for="nama">Nama</label>
                    </div>
                    <span class="error-message" id="namaError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="number" id="nis" name="nis" required autocomplete="nis">
                        <label for="nis">NIS</label>
                    </div>
                    <span class="error-message" id="nisError"></span>
                </div>

 <!-- oh ya bentar, nama siswa, Rekeninig, tanggal_transaksi, jenis_transaksi, dan nominal, -->
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="rekening" name="rekening" required autocomplete="rekening">
                        <label for="rekening">Rekening</label>
                    </div>
                    <span class="error-message" id="rekeningError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required autocomplete="tanggal_transaksi">
                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                    </div>
                    <span class="error-message" id="tanggalTransaksiError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="jenis_transaksi" name="jenis_transaksi" required autocomplete="jenis_transaksi">
                        <label for="jenis_transaksi">Jenis Transaksi</label>
                    </div>
                    <span class="error-message" id="jenisTransaksiError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="number" id="nominal" name="nominal" required autocomplete="nominal">
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
    <script src="/js/insiswa.js"></script>
</body>
</html>