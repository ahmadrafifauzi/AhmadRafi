<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olivia Wilson - CV</title>
    <link rel="stylesheet" href="akunmedia.css">
</head>
<body background="bgbiru.jpg" class="bglatar">
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php echo isset($_COOKIE['FotoProfil']) ? $_COOKIE['FotoProfil'] : 'desainorang.png'; ?>" alt="Profil Foto">
                </div>
                <div class="profile-details">
                    <h2 class="first-name">
                        <?php echo isset($_COOKIE['FirstName']) ? $_COOKIE['FirstName'] : 'Nama Depan'; ?>
                    </h2>
                    <h2 class="last-name">
                        <?php echo isset($_COOKIE['LastName']) ? $_COOKIE['LastName'] : 'Nama Belakang'; ?>
                    </h2>
                    <p class="akun-name">@
                        <?php echo isset($_COOKIE['NamaPengguna']) ? $_COOKIE['NamaPengguna'] : 'Nama Akun'; ?>
                    </p>
                    <p class="job-title">
                        <?php echo isset($_COOKIE['Pekerjaan']) ? $_COOKIE['Pekerjaan'] : 'Pekerjaan'; ?>
                    </p>
                </div>                               
                <div class="profile-actions">
                    <button class="action-button">Instagram</button>
                    <button class="action-button">Tiktok</button>
                    <button class="action-button">Twitter</button>
                    <button class="action-button">Linkedin</button>
                    <?php if (isset($_COOKIE['FotoProfil'])): ?>
                    <a href="<?php echo $_COOKIE['FotoProfil']; ?>" download>
                         <button class="action-button">Download Foto Profil</button>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="datadiri.html">Data diri</a></li>
                    <li><a href="#">Postingan</a></li>
                </ul>
                <div class="auth-buttons">
                    <button class="login-button">Login</button>
                    <button class="signup-button">Sign Up</button>
                </div>
            </nav>
            <section class="content">
                <div class="section-left">
                    <section class="section experience">
                        <h3>Pengalaman</h3>
                        <div class="section-content">
                            <div class="pengalaman">
                                <p><?php echo isset($_COOKIE['Pengalaman']) ? $_COOKIE['Pengalaman'] : '-'; ?></p>
                                <p><?php echo isset($_COOKIE['Pekerjaann']) ? $_COOKIE['Pekerjaann'] : '-'; ?></p>
                            </div>
                        </div>
                    </section>
                    <section class="section skills">
                        <h3>Keahlian</h3>
                        <div class="section-content">
                            <ul class="skills-list">
                                <li><?php echo isset($_COOKIE['Kemampuan1']) ? $_COOKIE['Kemampuan1'] : '-'; ?></li>
                                <li><?php echo isset($_COOKIE['Kemampuan2']) ? $_COOKIE['Kemampuan2'] : '-'; ?></li>
                                <li><?php echo isset($_COOKIE['Kemampuan3']) ? $_COOKIE['Kemampuan3'] : '-'; ?></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="section-right">
                    <section class="section bio">
                        <h3>Bio</h3>
                        <div class="section-content">
                            <p><?php echo isset($_COOKIE['Biodata']) ? $_COOKIE['Biodata'] : 'Belum diisi'; ?></p>
                        </div>
                    </section>
                    <section class="section education">
                        <h3>Pendidikan</h3>
                        <div class="section-content">
                            <div class="education-item">
                                <p class="institut">Institut: <?php echo isset($_COOKIE['Institut']) ? $_COOKIE['Institut'] : 'Belum diisi'; ?></p>
                                <p class="jurusan">Jurusan: <?php echo isset($_COOKIE['Jurusan']) ? $_COOKIE['Jurusan'] : 'Belum diisi'; ?></p>
                                <p class="gpa">Gpa: <?php echo isset($_COOKIE['Gpa']) ? $_COOKIE['Gpa'] : 'Belum diisi'; ?></p>
                            </div>
                        </div>
                    </section>
                    <section class="content">
                <div class="section-right">
                    <section class="section contact">
                        <h3>Kontak person</h3>
                        <div class="section-content">
                            <p>Panggilan: <?php echo isset($_COOKIE['Panggilan']) ? $_COOKIE['Panggilan'] : 'Belum diisi'; ?></p>
                            <p>Email: <?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : 'Belum diisi'; ?></p>
                            <p>No.Handphone: <?php echo isset($_COOKIE['Hp']) ? $_COOKIE['Hp'] : 'Belum diisi'; ?></p>
                            <p>Alamat: <?php echo isset($_COOKIE['Alamat']) ? $_COOKIE['Alamat'] : 'Belum diisi'; ?></p>
                        </div>
                    </section>
                </div>
            </section>
                </div>
            </section>
        </main>
    </div>
</body>
</html>