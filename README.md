# Sistem Pendaftaran Beasiswa

Selamat datang di **Sistem Pendaftaran Beasiswa**! Platform ini memudahkan mahasiswa untuk mendaftar berbagai jenis beasiswa, seperti:

- **Beasiswa Akademik**
- **Beasiswa Non-Akademik**
- **Beasiswa Hafiz Quran**

Melalui sistem ini, mahasiswa dapat melakukan pendaftaran beasiswa dengan lebih mudah serta melacak kemajuan aplikasi mereka. Sistem ini dilengkapi dengan fitur **registrasi** dan **login** yang memungkinkan mahasiswa memiliki akun pribadi untuk mengakses dan mengelola pendaftaran beasiswa mereka.

## Fitur Utama

1. **Registrasi dan Login**: Mahasiswa dapat membuat akun pribadi dengan satu role "mahasiswa".
2. **Pendaftaran Beasiswa**: Mahasiswa dapat memilih beasiswa yang tersedia dan mengunggah berkas persyaratan.
3. **Pelacakan Status Aplikasi**: Mahasiswa dapat melacak status pengajuan beasiswa mereka.

### Informasi Akun

- **Username**: `rahmasetiani200@gmail.com`
- **Password**: `123`

## Tools yang Digunakan

- **Visual Studio Code**: Sebagai *text editor* untuk menulis kode.
- **XAMPP**: Web server lokal untuk menjalankan aplikasi berbasis PHP.
- **Bahasa Pemrograman PHP**: Digunakan untuk pengembangan logika aplikasi.
- **CSS (Cascading Style Sheets)**: Untuk mendesain tampilan dan gaya halaman web.
- **HTML (Hypertext Markup Language)**: Untuk membuat struktur dan konten halaman web.
- **JavaScript**: Untuk menambahkan interaktivitas pada halaman web.
- **Bootstrap (versi 5.3.0-alpha3)**: Framework CSS yang mempermudah pembuatan desain yang responsif dan modern.

## Cara Menggunakan

1. **Instalasi XAMPP**:
   - Pastikan XAMPP sudah diinstal di perangkat Anda.
   - Pastikan modul **Apache** dan **MySQL** sudah dijalankan dari *control panel* XAMPP.

2. **Clone Repository**:
   - Clone repository ini ke folder `htdocs` di direktori instalasi XAMPP (biasanya `C:\xampp\htdocs`).

3. **Import Database**:
   - Buka phpMyAdmin melalui browser (`http://localhost/phpmyadmin`).
   - Buat database baru dengan nama `pendaftaran_beasiswa`.
   - Import file SQL ke dalam database yang baru dibuat.

4. **Konfigurasi Koneksi Database**:
   - Buka file `config.php` (atau file konfigurasi database).
   - Pastikan pengaturan sesuai dengan database lokal Anda (biasanya username: `root`, tanpa password).

5. **Menjalankan Aplikasi**:
   - Akses aplikasi melalui browser dengan membuka URL: `http://localhost/pendaftaran_beasiswa`.
