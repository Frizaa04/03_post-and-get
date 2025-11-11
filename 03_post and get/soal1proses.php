<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>

    <?php
    // Membaca data input dari form pada soal 1
    $saldoAwal = $_POST['saldoAwal'];
    $bunga = $_POST['bunga'] / 100; // ubah persen ke desimal
    $bulan = $_POST['bulan'];

    // Menghitung saldo akhir
    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

    // Menampilkan hasil
    echo "<p>Saldo Awal: Rp. " . $saldoAwal. ",-</p>";
    echo "<p>Bunga per Bulan: " . ($bunga * 100) . "%</p>";
    echo "<p>Lama Tabungan: " . $bulan . " bulan</p>";
    echo "<hr>";
    echo "<p><strong>Saldo Akhir setelah " . $bulan . " bulan adalah: Rp. " . $saldoAkhir . ",-</strong></p>";
    ?>
</body>
</html>
