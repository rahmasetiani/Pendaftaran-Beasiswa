<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/style.css"> 
    <link rel="stylesheet" href="../asset/css/dashboard.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .requirements {
            max-height: 0; /* Set max-height to 0 to hide */
            overflow: hidden; /* Prevent content overflow */
            transition: max-height 0.5s ease-out; /* Smooth transition */
        }
        .requirements.show {
            max-height: 200px; /* Set a suitable max-height when shown */
        }
        .btn-detail {
            background-color: #4CAF50; /* Gray color */
            color: white; /* Text color */
            border: none; /* Remove border */
        }
    </style>
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
    <br><h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
    <h2>Jenis Beasiswa dan Ketentuan</h2><br>

    <!-- Scholarship Cards -->
    <div class="scholarship-cards row">
        <!-- Beasiswa Akademik Card -->
        <div class="card col-md-4">
            <img src="../asset/img/akademikk.jpg" class="card-img-top" alt="Beasiswa Akademik">
            <div class="card-body">
                <h4 class="card-title">Beasiswa Akademik</h4>
                <p class="card-text"><strong>Syarat:</strong> IPK minimal 3.0, Menjuarai perlombaan bidang Akademik tingkat Nasional.</p>
                <button class="btn btn-detail" onclick="toggleRequirements('req-akademik')">Lihat Detail</button>
                <div id="req-akademik" class="requirements">
                    <p><strong>Dokumen yang Diperlukan:</strong></p>
                    <ul>
                        <li>Fotokopi KTM</li>
                        <li>Fotokopi transkrip nilai terakhir</li>
                        <li>Surat pernyataan tidak menerima beasiswa lain</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Beasiswa Non-Akademik Card -->
        <div class="card col-md-4">
            <img src="../asset/img/nonakademik.jpg" class="card-img-top" alt="Beasiswa Non-Akademik">
            <div class="card-body">
                <h4 class="card-title">Beasiswa Non-Akademik</h4>
                <p class="card-text"><strong>Syarat:</strong> IPK minimal 3.0, Menjuarai perlombaan bidang Non-Akademik tingkat Nasional.</p>
                <button class="btn btn-detail" onclick="toggleRequirements('req-nonakademik')">Lihat Detail</button>
                <div id="req-nonakademik" class="requirements">
                    <p><strong>Dokumen yang Diperlukan:</strong></p>
                    <ul>
                        <li>Fotokopi KTM</li>
                        <li>Surat keterangan aktif dalam organisasi</li>
                        <li>Surat rekomendasi dari dosen</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Beasiswa Hafiz Quran Card -->
        <div class="card col-md-4">
            <img src="../asset/img/hafiz.jpg" class="card-img-top" alt="Beasiswa Hafiz Quran">
            <div class="card-body">
                <h4 class="card-title">Beasiswa Hafiz Quran</h4>
                <p class="card-text"><strong>Syarat:</strong> IPK minimal 3.0, Hafiz/hafizah minimal 15 juz, mengikuti ujian hafalan Quran.</p>
                <button class="btn btn-detail" onclick="toggleRequirements('req-hafiz')">Lihat Detail</button>
                <div id="req-hafiz" class="requirements">
                    <p><strong>Dokumen yang Diperlukan:</strong></p>
                    <ul>
                        <li>Fotokopi KTM</li>
                        <li>Sertifikat hafalan Quran (minimal 15 juz)</li>
                        <li>Surat rekomendasi dari pemuka agama/dosen</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-5">
        <h3 class="text-center">Grafik Jumlah Penerima Beasiswa Tahun 2022-2024</h3>
        <div class="row justify-content-center"> <!-- Center the chart -->
            <div class="col-md-6"> <!-- Adjust the column size to make it smaller -->
                <canvas id="beasiswaChart" width="400" height="200"></canvas> <!-- Set smaller size -->
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<!-- CSS Kustom -->
<style>
    .bg-custom {
        background-color: #4CAF50; /* Contoh warna hijau */
    }
</style>

<!-- Footer -->
<footer class="bg-custom text-white text-center py-3">
    <div class="container">
        <p>&copy; 2024 Pendaftaran Beasiswa. All Rights Reserved.</p>
        <p>Hubungi Kami di:
            <a href="https://www.facebook.com/rahmaaez/" class="text-white">Facebook</a> |
            <a href="mailto:rahmaseet@example.com" class="text-white">Email</a> |
            <a href="https://www.instagram.com/rahmaseet/" class="text-white">Instagram</a>
        </p>
    </div>
</footer>

<script>
const ctx = document.getElementById('beasiswaChart').getContext('2d');
const beasiswaChart = new Chart(ctx, {
    type: 'bar', // You can change this to 'line', 'pie', etc., based on your preference
    data: {
        labels: ['Beasiswa Akademik', 'Beasiswa Non-Akademik', 'Beasiswa Hafiz Quran'], // Labels for each category
        datasets: [
            {
                label: 'Jumlah Penerima Beasiswa - 2022',
                data: [30, 15, 10], // Data for 2022
                backgroundColor: 'rgba(76, 175, 80, 0.5)', // Color for this dataset
                borderColor: 'rgba(76, 175, 80, 1)',
                borderWidth: 1
            },
            {
                label: 'Jumlah Penerima Beasiswa - 2023',
                data: [25, 20, 15], // Data for 2023
                backgroundColor: 'rgba(255, 165, 0, 0.5)', // Different color for this dataset
                borderColor: 'rgba(255, 165, 0, 1)',
                borderWidth: 1
            },
            {
                label: 'Jumlah Penerima Beasiswa - 2024',
                data: [20, 25, 10], // Data for 2024
                backgroundColor: 'rgba(0, 123, 255, 0.5)', // Another color for this dataset
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>


<script>
    function toggleRequirements(id) {
        const requirements = document.getElementById(id);
        const allRequirements = document.querySelectorAll('.requirements'); // Select all requirements
        
        // Hide all requirements first
        allRequirements.forEach(req => {
            if (req !== requirements) {
                req.classList.remove('show');
            }
        });

        // Toggle the clicked requirement
        requirements.classList.toggle('show');

        // Optional: Scroll to the element if it becomes visible
        if (requirements.classList.contains('show')) {
            requirements.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>

</body>
</html>
