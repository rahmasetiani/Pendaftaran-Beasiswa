<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <h2>Pendaftaran Beasiswa</h2>
            <ul>
                <li><a href="dashboard.php">Pilihan Beasiswa</a></li>
                <li><a href="pendaftaran.php">Daftar Beasiswa</a></li>
                <li><a href="hasil.php">Hasil</a></li>
                <li><a href="../func/logout.php">Logout Akun</a></li>
            </ul>
        </div>
    </nav>

    <?php
session_start(); ?>

<div class="scholarship-section">
<h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
<h2>Jenis Beasiswa dan Ketentuan</h2>

<!-- Scholarship Cards -->
<div class="scholarship-cards">
    <!-- Beasiswa Akademik Card -->
    <div class="card">
        <h4>Beasiswa Akademik</h4>
        <p><strong>Syarat:</strong> IPK minimal 3.0, Menjuarai perlombaan bidang Akademik tingkat Nasional.</p>
        <p><strong>Dokumen yang Diperlukan:</strong></p>
        <ul>
            <li>Fotokopi KTM</li>
            <li>Fotokopi transkrip nilai terakhir</li>
            <li>Surat pernyataan tidak menerima beasiswa lain</li>
            <li>Pas foto terbaru</li>
        </ul>
    </div>

    <!-- Beasiswa Non-Akademik Card -->
    <div class="card">
        <h4>Beasiswa Non-Akademik</h4>
        <p><strong>Syarat:</strong> IPK minimal 3.0, Menjuarai perlombaan bidang Non-Akademik tingkat Nasional.</p>
        <p><strong>Dokumen yang Diperlukan:</strong></p>
        <ul>
            <li>Fotokopi KTM</li>
            <li>Surat keterangan aktif dalam organisasi</li>
            <li>Surat rekomendasi dari dosen</li>
            <li>Pas foto terbaru</li>
        </ul>
    </div>

    <!-- Beasiswa Hafiz Quran Card -->
    <div class="card">
        <h4>Beasiswa Hafiz Quran</h4>
        <p><strong>Syarat:</strong> IPK minimal 3.0, Hafiz/hafizah minimal 15 juz, mengikuti ujian hafalan Quran.</p>
        <p><strong>Dokumen yang Diperlukan:</strong></p>
        <ul>
            <li>Fotokopi KTM</li>
            <li>Sertifikat hafalan Quran (minimal 15 juz)</li>
            <li>Surat rekomendasi dari pemuka agama/dosen</li>
            <li>Pas foto terbaru</li>
        </ul>
    </div>
</div>
</div>
</body>
</html>
