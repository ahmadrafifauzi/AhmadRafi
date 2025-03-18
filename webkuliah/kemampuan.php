<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("Kemampuan1", !empty($_POST['Kemampuan1']) ? $_POST['Kemampuan1'] : ($_COOKIE['Kemampuan1'] ?? ''), time() + 3600, "/");
    setcookie("Kemampuan2", !empty($_POST['Kemampuan2']) ? $_POST['Kemampuan2'] : ($_COOKIE['Kemampuan2'] ?? ''), time() + 3600, "/");
    setcookie("Kemampuan3", !empty($_POST['Kemampuan3']) ? $_POST['Kemampuan3'] : ($_COOKIE['Kemampuan3'] ?? ''), time() + 3600, "/");
    setcookie("Biodata", !empty($_POST['Biodata']) ? $_POST['Biodata'] : ($_COOKIE['Biodata'] ?? ''), time() + 3600, "/");
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
    <link rel="stylesheet" href="kemampuan.css">
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
                <h1>Kemampuan & Biodata</h1>
            </div>
            <form method="POST" action="">
            <div class="form-container">
                <div class="input-group">
                    <label for="Kemampuan1">Kemampuan 1</label>
                    <input type="text" name="Kemampuan1" id="Kemampuan1" placeholder="Kemampuan1">
                </div>
                <div class="input-group">
                    <label for="Kemampuan2">Kemampuan 2</label>
                    <input type="text" name="Kemampuan2" id="Kemampuan2" placeholder="Kemampuan 2">
                </div>
                <div class="input-group">
                    <label for="Kemampuan3">Kemampuan 3</label>
                    <input type="text"name="Kemampuan3" id="Kemampuan3" placeholder="Kemampuan 3">
                </div>
                <div class="input-group">
                    <label for="Biodata">Biodata</label>
                    <input type="text" name="Biodata" id="Biodata" placeholder="Biodata">
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