<?php
session_start();

// Koneksi ke database
include 'db/koneksi.php';

// Jika sudah login, redirect ke dashboard
if (isset($_SESSION['nama'])) {
    header("Location: page/dashboard.php");
    exit();
}

// Proses login jika method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Ambil data pengguna dari database
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['nama'] = $user['nama'];
            header("Location: page/dashboard.php"); // Redirect ke dashboard setelah login berhasil
            exit();
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Pengguna tidak ditemukan.";
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

    <h2>Login Akun Pendaftaran Beasiswa</h2>
    <?php if (isset($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>

    <div class="menu">
        <p>Belum punya akun? <a href="register.php">Register</a> untuk membuat akun.</p><br>
    </div>
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
