<?php
include '../db/koneksi.php';

// Fetch all applications from the database
$query = "SELECT * FROM daftar"; // Adjust this query if you need to filter by user
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Beasiswa</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/pendaftaran.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <h2>Hasil Pendaftaran Beasiswa</h2>
            <ul>
                <li><a href="dashboard.php">Pilihan Beasiswa</a></li>
                <li><a href="pendaftaran.php">Daftar Beasiswa</a></li>
                <li><a href="hasil.php">Hasil</a></li>
                <li><a href="../func/logout.php">Logout Akun</a></li>
            </ul>
        </div>
    </nav>

    <!-- Results Section -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Daftar Pendaftaran Beasiswa</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Semester</th>
                    <th>IPK Terakhir</th>
                    <th>Pilihan Beasiswa</th>
                    <th>Berkas Syarat</th>
                    <th>Status Ajuan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are results and display them
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {//loop through
                        echo "<tr>
                                <td>" . htmlspecialchars($row['nama']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['no_hp']) . "</td>
                                <td>" . htmlspecialchars($row['semester']) . "</td>
                                <td>" . htmlspecialchars($row['last_ipk']) . "</td>
                                <td>" . htmlspecialchars($row['beasiswa']) . "</td>                        
                                <td class='text-center'><a href='/SERKOM/pendaftaran-beasiswa/uploads/" . htmlspecialchars($row['syarat_berkas']) . "' target='_blank' <i class='fas fa-download'></i></td>
                                <td>";

                        // Check status ajuan 
                        echo ($row["status_ajuan"] == '1') ? "Sudah terverifikasi" : "Belum diverifikasi";

                        echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Belum ada pendaftaran</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

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

</html>

<?php
// Close database connection
$conn->close();
?>
