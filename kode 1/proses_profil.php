<?php
// Ambil data dari form POST
$nim = $_POST['nim'] ?? '';
$nama = $_POST['nama'] ?? '';
$tempat = $_POST['tempat'] ?? '';
$tanggal = $_POST['tanggal'] ?? '';
$hobi = $_POST['hobi'] ?? '';
$pasangan = $_POST['pasangan'] ?? '';
$pekerjaan = $_POST['pekerjaan'] ?? '';
$ortu = $_POST['ortu'] ?? '';
$kakak = $_POST['kakak'] ?? '';
$adik = $_POST['adik'] ?? '';

// Simpan data sementara ke session agar bisa ditampilkan di about
session_start();
$_SESSION['profil'] = [
    'nim' => $nim,
    'nama' => $nama,
    'tempat' => $tempat,
    'tanggal' => $tanggal,
    'hobi' => $hobi,
    'pasangan' => $pasangan,
    'pekerjaan' => $pekerjaan,
    'ortu' => $ortu,
    'kakak' => $kakak,
    'adik' => $adik
];

// Redirect kembali ke index.php
header("Location: index.php");
exit;
?>
