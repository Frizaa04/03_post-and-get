<html>
    <head>
        <title>Form pendaftaran online</title>
    </head>
    <body>
        <h1>Isi dengan jujur</h1>
        <form action="soal4proses.php" method="get">
            <table>
                <tr><td>Nama anda: <input type="text" name="nama" size="30"></td></tr>
                <tr><td>Tempat lahir: <input type="text" name="tempat_lahir" size="30"></td></tr>
                <tr><td>
                        Tanggal lahir:
                        <select name="tanggal">
                            <option value="">Tanggal</option>
                            <!--Tanggal 1–31 -->
                            <?php for ($i = 1; $i <= 31; $i++) echo "<option value='$i'>$i</option>"; ?>
                        </select>

                        <select name="bulan">
                            <option value="">-- Bulan --</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>

                        <!--box untuk tahun -->
                        <select name="tahun">
                            <option value="">Tahun</option>
                            <?php for ($i = 1980; $i <= 2005; $i++) echo "<option value='$i'>$i</option>"; ?>
                        </select>
                </td></tr>
                <tr><td>Alamat: <textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                <tr><td>Jenis kelamin:
                        <input type="radio" name="sex" value="L">Laki-laki
                        <input type="radio" name="sex" value="P">Perempuan
                    </td>
                </tr>
                <tr><td>Asal sekolah: <input type="text" name="asal_sekolah" size="30"></td></tr>
                <tr><td>Nilai UAN: <input type="text" name="nilai_uan" size="10"></td></tr>
            </table>
            <input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
        </form>
    </body>
</html>