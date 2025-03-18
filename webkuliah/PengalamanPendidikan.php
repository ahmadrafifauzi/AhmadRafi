<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie("Pengalaman", !empty($_POST['Pengalaman']) ? $_POST['Pengalaman'] : ($_COOKIE['Pengalaman'] ?? ''), time() + 3600, "/");
    setcookie("Pengalamann", !empty($_POST['Pengalamann']) ? $_POST['Pengalamann'] : ($_COOKIE['Pengalamann'] ?? ''), time() + 3600, "/");
    setcookie("Institut", !empty($_POST['Institut']) ? $_POST['Institut'] : ($_COOKIE['Institut'] ?? ''), time() + 3600, "/");
    setcookie("Jurusan", !empty($_POST['Jurusan']) ? $_POST['Jurusan'] : ($_COOKIE['Jurusan'] ?? ''), time() + 3600, "/");
    setcookie("Gpa", !empty($_POST['Gpa']) ? $_POST['Gpa'] : ($_COOKIE['Gpa'] ?? ''), time() + 3600, "/");

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
    <link rel="stylesheet" href="PengalamanPendidikan.css">
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
                <h2>Pengalaman & Pendidikan</h2>
            </div>
            <form method="POST" action="">
            <div class="form-container">
                <div class="input-group">
                    <label for="Pengalaman">Pengalaman 1</label>
                    <input type="text" name="Pengalaman" id="Pengalaman" placeholder="pengalaman 1">
                </div>
                <div class="input-group">
                    <label for="Pengalamann">Pengalaman 2</label>
                    <input type="text" name="Pengalamann" id="Pengalamann" placeholder="pengalaman 2">
                </div>
                <div class="input-group">
                    <label for="Institut">Institut</label>
                    <input type="text" name="Institur" id="Institut" placeholder="Institut">
                </div>
                <div class="input-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan">
                </div>
                <div class="input-group">
                    <label for="Gpa">Gpa</label>
                    <input type="text" name="Gpa" id="Gpa" placeholder="Gpa">
                </div>
            </div>
            <div class="footer">
                <button class="save-button">Simpan</button>
            </div>
            </form>
            
        </div>
    </div>
</body>
</html>