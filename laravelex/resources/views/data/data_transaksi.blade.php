<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Rekening</th>
        <th>Tanggal Transaksi</th>
        <th>Jenis Transaksi</th>
        <th>Nominal</th>
    </tr>
    <tr>
        <td>001</td>
        <td>01-08-2025</td>
        <td>Setor</td>
        <td>Rp500.000</td>
    </tr>
    <tr>
        <td>002</td>
        <td>03-08-2025</td>
        <td>Tarik</td>
        <td>Rp200.000</td>
    </tr>
    <tr>
        <td>001</td>
        <td>05-08-2025</td>
        <td>Transfer</td>
        <td>Rp300.000</td>
    </tr>
</table>
</body>
</html>     -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Riwayat Transaksi</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/css/Dash.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!-- <img style="margin: 10px;width:50px;height:50px;" src="/img/Mudikal.png"> -->
            <h1 class="navbar-brand ps-3">Tabungan Mudikal</h1>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="breadcrumb-item active" style="color: white;">{{ $petugas->username }}</li>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('data.data_siswa') }}">Data Siswa</a>
                                    <a class="nav-link" href="{{ route('data.data_transaksi') }}">Riwayat Transaksi</a></a>
                                    <a class="nav-link" href="{{ route('data.data_rekening') }}">Data Rekening</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Dibuat oleh:</div>
                         Team IT
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Riwayat Transaksi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Riwayat Transaksi</li>
                        </ol>
                        <a href="{{ route('input.input_transaksi') }}">Riwayat Transaksi</a>
                        <br>
                        @if(session('success'))
                            <p style="color: green">{{ session('success') }}</p>
                        @endif
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Trasaksi
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rekening</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Nominal</th>
                                            <th>created_at</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rekening</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Nominal</th>
                                            <th>created_at</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse($transaksi as $t)
                                            <tr>
                                                <td>{{ $t->rekening->siswa->nama ?? '-' }}</td>
                                                <td>{{ $t->rekening->id_rekening ?? '-' }}</td>
                                                <td>{{ $t->tanggal_transaksi }}</td>
                                                <td>{{ $t->jenis_transaksi }}</td>
                                                <td>Rp {{ number_format($t->nominal, 0, ',', '.') }}</td>
                                                <td>{{ $t->created_at}}</td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="4">Belum ada data trasaksi</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Tabungan Mudikal 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/assets/demo/chart-area-demo.js"></script>
        <script src="/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>
    </body>
</html>
