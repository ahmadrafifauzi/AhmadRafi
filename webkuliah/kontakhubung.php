<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("Panggilan", !empty($_POST['Panggilan']) ? $_POST['Panggilan'] : ($_COOKIE['Panggilan'] ?? ''), time() + 3600, "/");
    setcookie("email", !empty($_POST['email']) ? $_POST['email'] : ($_COOKIE['email'] ?? ''), time() + 3600, "/");
    setcookie("Hp", !empty($_POST['Hp']) ? $_POST['Hp'] : ($_COOKIE['Hp'] ?? ''), time() + 3600, "/");
    setcookie("Alamat", !empty($_POST['Alamat']) ? $_POST['Alamat'] : ($_COOKIE['Alamat'] ?? ''), time() + 3600, "/");

    // Redirect ke akunmedia.php setelah menyimpan cookies
    header("Location: akunmedia.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceria - Kontak Hubung</title>
    <link rel="stylesheet" href="kontakhubung.css">
</head>
<body background="bgbiru.jpg" class="bglatar">
    <div class="container">
        <div class="left-section">
            <img src="desainorang.png" alt="Delivery Man" class="delivery-man">
            <div class="logo">
                <h1>Student's</h1>
                <p>Employes APP</p>
            </div>
        </div>
        <div class="right-section">
            <div class="header">
                <h1>Kontak Hubung</h1>
            </div>
            <form method="POST" action="">
                <div class="form-container">
                    <div class="input-group">
                        <label for="Panggilan">Panggilan</label>
                        <input type="text" name="Panggilan" id="Panggilan" placeholder="Panggilan">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <label for="Hp">No.Handphone</label>
                        <input type="text" name="Hp" id="Hp" placeholder="Nomor Handphone">
                    </div>
                    <div class="input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="footer">
                    <button type="submit" class="save-button">Simpan</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
