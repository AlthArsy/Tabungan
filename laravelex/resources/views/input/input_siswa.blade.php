<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="/css/insiswa.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Input Siswa</h2>
            </div>
            
            <form class="login-form" id="loginForm" method="POST" action="{{ route('siswa.push')}}">
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="nama" name="nama" required autocomplete="nama">
                        <label for="nama">Nama</label>
                    </div>
                    <span class="error-message" id="namaError"></span>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text" id="nis" name="nis" required autocomplete="nis" maxlength="18">
                        <label for="nis">NIS</label>
                    </div>
                    <span class="error-message" id="nisError"></span>
                </div>
                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="text" id="jurusan" name="jurusan" required autocomplete="jurusan">
                            <label for="jurusan">Jurusan</label>
                            </button>
                        </div>
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