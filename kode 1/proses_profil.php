<?php
// proses_profil.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = htmlspecialchars($_POST['nim'] ?? '');
    $nama = htmlspecialchars($_POST['nama_lengkap'] ?? '');
    $tempat = htmlspecialchars($_POST['tempat_lahir'] ?? '');
    $tanggal = htmlspecialchars($_POST['tanggal_lahir'] ?? '');
    $hobi = htmlspecialchars($_POST['hobi'] ?? '');
    $pasangan = htmlspecialchars($_POST['pasangan'] ?? '');
    $pekerjaan = htmlspecialchars($_POST['pekerjaan'] ?? '');
    $orang_tua = htmlspecialchars($_POST['orang_tua'] ?? '');
    $kakak = htmlspecialchars($_POST['kakak'] ?? '');
    $adik = htmlspecialchars($_POST['adik'] ?? '');
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Profil Pengunjung</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>Profil Pengunjung</h1>
    <a href="index.php" style="color:white; text-decoration:none;">← Kembali</a>
  </header>

  <section id="about">
    <h2>Data Profil Anda</h2>
    <p><strong>NIM:</strong> <?= $nim ?></p>
    <p><strong>Nama Lengkap:</strong> <?= $nama ?></p>
    <p><strong>Tempat Lahir:</strong> <?= $tempat ?></p>
    <p><strong>Tanggal Lahir:</strong> <?= $tanggal ?></p>
    <p><strong>Hobi:</strong> <?= $hobi ?></p>
    <p><strong>Pasangan:</strong> <?= $pasangan ?></p>
    <p><strong>Pekerjaan:</strong> <?= $pekerjaan ?></p>
    <p><strong>Nama Orang Tua:</strong> <?= $orang_tua ?></p>
    <p><strong>Nama Kakak:</strong> <?= $kakak ?></p>
    <p><strong>Nama Adik:</strong> <?= $adik ?></p>
  </section>

  <footer>
    <p>&copy; 2025 Profil Saya. Semua hak dilindungi.</p>
  </footer>
</body>
</html>
