<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Profil</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>Profil Saya</h1>
    <button id="menuToggle">&#9776;</button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang Saya</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <section id="home">
    <h2>Beranda</h2>
    <p>Selamat datang di halaman profil saya.</p>
  </section>

  <section id="about">
    <h2>Tentang Saya</h2>
    <p>Saya adalah seseorang yang gemar belajar teknologi dan berbagi pengetahuan.</p>
    <p>Halaman ini berisi informasi singkat serta form untuk menghubungi saya.</p>
  </section>

  <section id="contact">
    <h2>Kontak Saya</h2>
    <form action="#" method="post">
      <label for="txtNama">
        <span>Nama:</span>
        <input type="text" id="txtNama" name="nama" placeholder="Masukkan nama Anda" />
      </label>

      <label for="txtEmail">
        <span>Email:</span>
        <input type="email" id="txtEmail" name="email" placeholder="nama@mail.com" />
      </label>

      <label for="txtPesan">
        <span>Pesan:</span>
        <textarea id="txtPesan" name="pesan" maxlength="200" placeholder="Tulis pesan Anda..."></textarea>
        <div id="charCount">0/200 karakter</div>
      </label>

      <button type="submit">Kirim Pesan</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Profil Saya. Semua hak dilindungi.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
