<html>
<head>
    <title>Menghitung Saldo Akhir</title>
</head>
<body>
    <h1>Menghitung Saldo Akhir Tabungan</h1>

    <form method="post" action="soal1proses.php"> <!-- kita akan menggunakan metod post -->
        <table>1
            <tr>
                <td>Masukkan Saldo Awal (Rp)</td> <!--menambahkan inputan untuk memasukkan saldo awal bunga perbulan dan lama bulannya -->
                <td>:</td>
                <td><input type="text" name="saldoAwal"></td>
            </tr>
            <tr>
                <td>Masukkan Bunga per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga"></td>
            </tr>
            <tr>
                <td>Masukkan Lama Bulan</td>
                <td>:</td>
                <td><input type="text" name="bulan"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Hitung"> <!-- mensubmit dan menghapus/menyetel ulang form -->
        <input type="reset" name="reset" value="Hapus">
    </form>
</body>
</html>
