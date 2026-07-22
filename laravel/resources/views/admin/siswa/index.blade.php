<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>

    <table border="1" cellpadding="8" style="margin-top: 10px; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>Rp {{ number_format($siswa->saldo, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr><td colspan="4">Belum ada data siswa</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>