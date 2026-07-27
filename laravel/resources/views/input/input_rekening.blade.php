<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekening</title>
    <link rel="stylesheet" href="/css/insiswa.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Input Rekening</h2>
            </div>
            
            <form class="login-form" id="loginForm" method="POST" action="{{ route('input.push')}}">
                <div class="form-group">
                    <div class="input-wrapper">
                        <!-- <input type="text" id="nama" name="nama" required autocomplete="nama"> -->
                        <!-- <label for="nama">Nama Siswa</label> -->
                        <select id="nama" name="nama" required>
                            <option value="" disabled selected>pilih siswa</option>
                            @foreach($siswa as $s)
                                <option value="{{ $s->id_siswa }}">{{ $s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="error-message" id="namaError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="number" id="saldo" name="saldo" required autocomplete="current-saldo">
                        <label for="saldo">Saldo</label>
                    </div>
                    <span class="error-message" id="saldoError"></span>
                </div>
                <div class="form-group">
                        <div class="input-wrapper">
                            <input type="date" id="tahun_daftar" name="tahun_daftar" required autocomplete="tahun_daftar">
                            <label for="tahun_daftar">Tahun Daftar</label>
                        </div>
                        <span class="error-message" id="tahun_daftarError"></span>
                </div>
                <button type="submit" class="login-btn">
                    <span class="btn-text">Buat</span>
                </button>
            </form>
        </div>
    </div>

    <script src="/js/form-utils.js"></script>
</body>
</html>