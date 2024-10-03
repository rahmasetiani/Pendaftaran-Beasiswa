<?php
include 'db/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Cek apakah email sudah terdaftar
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows == 0) {
        $conn->query("INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')");
        $message = "Pendaftaran berhasil! Silakan <a href='index.php'>Login</a>";
        $message_type = "success"; // Added message type
    } else {
        $message = "Email sudah terdaftar.";
        $message_type = "error"; // Added message type
    }
}
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Selamat Datang di Sistem Pendaftaran Beasiswa</h1>

    <h2>Registrasi Akun Pendaftaran Beasiswa</h2>
    
    <div class="notification <?= $message_type ?? '' ?>">
        <?php if (isset($message)): ?>
            <?= $message ?>
        <?php endif; ?>
    </div>

    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Register</button>
    </form>

    <div class="menu">
        <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($message)): ?>
                const notification = document.querySelector('.notification');
                notification.classList.add('show'); // Add show class to display
                setTimeout(() => {
                    notification.classList.remove('show'); // Remove after 5 seconds
                }, 5000);
            <?php endif; ?>
        });
    </script>
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
