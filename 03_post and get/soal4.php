<html>
    <head>
        <title>Form pendaftaran online</title>
    </head>
    <body>
        <h1>Isi dengan jujur</h1>
        <form action="soal4proses.php" method="get">
            <table>
                <tr><td>Nama anda: <input type="text" name="nama" size="30"></td></tr>
                <tr><td>Tempat lahir: <input type="text" name="Tempat lahir" size="30"></td></tr>
                <tr><td>Tanggal lahir: 
                    <input type="text" name="tanggal" size="3"> Tanggal
                    <input type="text" name="bulan" size="3"> Bulan
                    <input type="text" name="tahun" size="3"> Tahun
                </td></tr>
                <tr><td>Alamat: <textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                <tr><td>Jenis kelamin:
                        <input type="radio" name="sex" value="L">Laki-laki
                        <input type="radio" name="sex" value="P">perempuan
                    </td>
                </tr>
                <tr><td>Asal sekolah: <input type="text" name="asal sekolah" size="30"></td></tr>
                <tr><td>Nilai UAN: <input type="text" name="Nilai UAN" size="10"></td></tr>
            </table>
            <input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
        </form>

    </body>
</html>