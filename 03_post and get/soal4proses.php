<html>
<head>
    <title>Hasil Form Pendaftaran Online</title>
</head>
<body>
    <h1>Data Pendaftaran Anda</h1>

    <?php
    $nama = $_GET['nama'];
    $tempatLahir = $_GET['Tempat_lahir']; 
    $tanggal = $_GET['tanggal'];
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $alamat = $_GET['alamat'];
    $sex = $_GET['sex'];
    $asalSekolah = $_GET['asal_sekolah']; 
    $nilaiUAN = $_GET['Nilai_UAN'];       


    if (empty($tempatLahir)) $tempatLahir = $_POST['Tempat lahir'];
    if (empty($asalSekolah)) $asalSekolah = $_POST['asal sekolah'];
    if (empty($nilaiUAN)) $nilaiUAN = $_POST['Nilai UAN'];

    echo "<tr><td><strong>Terima Kasih $nama telah mengisi form pendaftaran</strong></td></tr><br>";
    echo "<tr><td><strong>Nama Anda :</strong></td><td>$nama</td></tr><br>";
    echo "<tr><td><strong>Tempat Lahir :</strong></td><td>$tempatLahir</td></tr><br>";
    echo "<tr><td><strong>Tanggal Lahir :</strong></td><td>$tanggal - $bulan - $tahun</td></tr><br>";
    echo "<tr><td><strong>Alamat :</strong></td><td>$alamat</td></tr><br>";
    echo "<tr><td><strong>Jenis Kelamin :</strong></td><td>$sex</td></tr><br>";
    echo "<tr><td><strong>Asal Sekolah :</strong></td><td>$asalSekolah</td></tr><br>";
    echo "<tr><td><strong>Nilai UAN :</strong></td><td>$nilaiUAN</td></tr><br>";
    echo "</table>";
    ?>

</body>
</html>
