<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>

    @if($errors->any())
        <ul style="color: red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('siswa.store') }}">
        @csrf
        <label>Username</label><br>
        <input type="text" name="username" value="{{ old('username') }}"><br><br>

        <label>Password</label><br>
        <input type="password" name="password" value="{{ old('password') }}"><br><br>

        <label>Kelas</label><br>
        <input type="text" name="kelas" value="{{ old('kelas') }}"><br><br>

        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan Siswa</title>
    <meta name="description" content="Soft-UI login form with realistic dual shadows and ambient mouse-tracked lighting.">
    <meta name="author" content="Aigars Silkalns / Colorlib">
    <link rel="canonical" href="https://preview.colorlib.com/theme/login-forms/forms/neumorphism/">
    <!-- <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='48' fill='%236366f1'/><text x='50' y='68' font-size='60' text-anchor='middle' fill='white' font-family='system-ui,sans-serif'>L</text></svg>"> -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Neumorphism Login Form">
    <meta property="og:description" content="Soft-UI login form with realistic dual shadows and ambient mouse-tracked lighting.">
    <meta property="og:url" content="https://preview.colorlib.com/theme/login-forms/forms/neumorphism/">
    <meta property="og:image" content="https://preview.colorlib.com/theme/login-forms/assets/screenshots/neumorphism.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Neumorphism Login Form">
    <meta name="twitter:description" content="Soft-UI login form with realistic dual shadows and ambient mouse-tracked lighting.">
    <meta name="twitter:image" content="https://preview.colorlib.com/theme/login-forms/assets/screenshots/neumorphism.png">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    @if($errors->any())
        <ul style="color: red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="neu-icon">
                    <div class="icon-inner">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
                <h2>Tambah Siswa</h2>
                <p>-</p>
            </div>
            
            <form class="login-form" id="loginForm" novalidate method="POST" action="{{ route('siswa.store') }}">
                <div class="form-group">
                    <div class="input-group neu-input">
                        <input type="text" id="nama" name="nama" required autocomplete="nama" placeholder=" ">
                        <label for="nama">Nama Siswa</label>
                        <div class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                    </div>
                    <span class="error-message" id="namaError"></span>
</div>
                
                <div class="form-group">
                    <div class="input-group neu-input">
                        <select id="kelas" name="kelas" required autocomplete="kelas">
                            <option value="" disabled selected hidden></option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                        <label for="kelas">Kelas</label>
                        <div class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                    </div>
                    <span class="error-message" id="kelasError"></span>
                </div>

                <div class="form-group">
                    <div class="input-group neu-input">
                        <select id="jurusan" name="jurusan" required autocomplete="jurusan">
                            <option value="" disabled selected hidden></option>
                            <option value="PPLG">PPLG</option>
                            <option value="TITL">TITL</option>
                        </select>
                        <label for="jurusan">Jurusan</label>
                        <div class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                    </div>
                    <span class="error-message" id="jurusanError"></span>
                </div>


<!-- 
                <div class="form-options">
                    <div class="remember-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember" class="checkbox-label">
                            <div class="neu-checkbox">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </div>
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div> -->

                <button type="submit" class="neu-button login-btn">
                    <span class="btn-text">Tambah Siswa</span>
                    <div class="btn-loader">
                        <div class="neu-spinner"></div>
                    </div>
                </button>
            </form>

            <div class="success-message" id="successMessage">
                <div class="success-icon neu-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                </div>
                <h3>Success!</h3>
                <p>Redirecting to your dashboard...</p>
            </div>
        </div>
    </div>

    <script src="../../shared/js/form-utils.js"></script>
    <script src="js/script.js"></script>
</body>
</html>