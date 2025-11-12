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
        <li><a href="#formProfil">Pendaftaran</a></li>
        <li><a href="#about">Tentang Saya</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <section id="home">
    <h2>Beranda</h2>
    <p>Selamat datang di halaman profil saya.</p>
  </section>

  <!-- Section baru: Pendaftaran Profil Pengunjung -->
  <section id="formProfil">
    <h2>Pendaftaran Profil Pengunjung</h2>
    <form action="proses_profil.php" method="post">
      <label for="nim">
        <span>NIM:</span>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM Anda" required />
      </label>

      <label for="namaLengkap">
        <span>Nama Lengkap:</span>
        <input type="text" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap Anda" required />
      </label>

      <label for="tempatLahir">
        <span>Tempat Lahir:</span>
        <input type="text" id="tempatLahir" name="tempatLahir" placeholder="Masukkan tempat lahir Anda" required />
      </label>

      <label for="tanggalLahir">
        <span>Tanggal Lahir:</span>
        <input type="date" id="tanggalLahir" name="tanggalLahir" required />
      </label>

      <label for="hobi">
        <span>Hobi:</span>
        <input type="text" id="hobi" name="hobi" placeholder="Masukkan hobi Anda" />
      </label>

      <label for="pasangan">
        <span>Pasangan:</span>
        <input type="text" id="pasangan" name="pasangan" placeholder="Masukkan nama pasangan (jika ada)" />
      </label>

      <label for="pekerjaan">
        <span>Pekerjaan:</span>
        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan pekerjaan Anda" />
      </label>

      <label for="ortu">
        <span>Nama Orang Tua:</span>
        <input type="text" id="ortu" name="ortu" placeholder="Masukkan nama orang tua" />
      </label>

      <label for="kakak">
        <span>Nama Kakak:</span>
        <input type="text" id="kakak" name="kakak" placeholder="Masukkan nama kakak" />
      </label>

      <label for="adik">
        <span>Nama Adik:</span>
        <input type="text" id="adik" name="adik" placeholder="Masukkan nama adik" />
      </label>

      <div class="button-group">
        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </section>
  <!-- Akhir section baru -->

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
