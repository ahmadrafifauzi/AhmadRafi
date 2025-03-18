<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyimpan nama pengguna dan informasi lainnya
    setcookie("NamaPengguna", !empty($_POST['NamaPengguna']) ? $_POST['NamaPengguna'] : ($_COOKIE['NamaPengguna'] ?? ''), time() + 3600, "/");
    setcookie("FirstName", !empty($_POST['FirstName']) ? $_POST['FirstName'] : ($_COOKIE['FirstName'] ?? ''), time() + 3600, "/");
    setcookie("LastName", !empty($_POST['LastName']) ? $_POST['LastName'] : ($_COOKIE['LastName'] ?? ''), time() + 3600, "/");
    setcookie("Pekerjaan", !empty($_POST['Pekerjaan']) ? $_POST['Pekerjaan'] : ($_COOKIE['Pekerjaan'] ?? ''), time() + 3600, "/");

    // Proses upload gambar
    if (!empty($_FILES["fotodiri"]["name"])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Buat folder jika belum ada
        }
        $fileName = basename($_FILES["fotodiri"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        
        if (move_uploaded_file($_FILES["fotodiri"]["tmp_name"], $targetFilePath)) {
            setcookie("FotoProfil", $targetFilePath, time() + 3600, "/"); // Simpan path gambar di cookie
        }
    }

    // Redirect ke akunmedia.php
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
    <link rel="stylesheet" href="profildiri.css">
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
                <h1>Profil Diri</h1>
            </div>
            <div class="form-container">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="fotodiri">Upload Profil Foto</label>
                        <input type="file" id="fotodiri" name="fotodiri">
                    </div>
                    <div class="input-group">
                        <label for="NamaPengguna">Nama Pengguna</label>
                        <input type="text" id="NamaPengguna" name="NamaPengguna" placeholder="Nama Pengguna" >
                    </div>
                    <div class="input-group">
                        <label for="FirstName">First Name</label>
                        <input type="text" id="FirstName" name="FirstName" placeholder="First Name" >
                    </div>
                    <div class="input-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" id="LastName" name="LastName" placeholder="Last Name" >
                    </div>
                    <div class="input-group">
                        <label for="Pekerjaan">Pekerjaan</label>
                        <input type="text" id="Pekerjaan" name="Pekerjaan" placeholder="Pekerjaan" >
                    </div>
                    <div class="footer">
                        <button type="submit" class="save-button">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
