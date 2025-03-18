<?php
ob_start();
session_start();

// Admin credentials
$admin_username = "web";
$admin_password = "web"; // Sebaiknya gunakan hash password untuk keamanan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password cocok
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: datadiri.html"); // Redirect ke halaman dashboard
        exit();
    } else {
        echo "<script>alert('Username atau password salah!'); window.location.href='login.html';</script>";
        exit();
    }
} else {
    header("Location: login.html"); // Redirect jika akses langsung
    exit();
}
ob_end_flush();
?>
