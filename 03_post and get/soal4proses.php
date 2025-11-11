<html>
<head>
    <title>Hasil Form Pendaftaran Online</title>
</head>
<body>
    <h1>Data Pendaftaran Anda</h1>

    <?php
    // Mengambil data dari GET
    $nama = $_GET['nama'];
    $tempatLahir = $_GET['tempat_lahir'];
    $tanggal = $_GET['tanggal'];
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $alamat = $_GET['alamat'];
    $sex = $_GET['sex'];
    $asalSekolah = $_GET['asal_sekolah'];
    $nilaiUAN = $_GET['nilai_uan'];

    echo "<strong>Terima Kasih $nama telah mengisi form pendaftaran</strong><br><br>";
    echo "<strong>Nama Anda :</strong> $nama<br>";
    echo "<strong>Tempat Lahir :</strong> $tempatLahir<br>";
    echo "<strong>Tanggal Lahir :</strong> $tanggal - $bulan - $tahun<br>";
    echo "<strong>Alamat :</strong> $alamat<br>";
    echo "<strong>Jenis Kelamin :</strong> $sex<br>";
    echo "<strong>Asal Sekolah :</strong> $asalSekolah<br>";
    echo "<strong>Nilai UAN :</strong> $nilaiUAN<br>";
    ?>
</body>
</html>