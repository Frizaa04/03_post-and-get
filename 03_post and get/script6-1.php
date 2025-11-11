<html>
    <head><title>
        Baca input dari form
    </title></head>
    <body>
        <h1>Baca input dari form</h1>
        <form action="script6-1proses.php" method="post">
            <table>
                <tr><td>Nama anda: <input type="text" name="nama" size="30"></td></tr>
                <tr><td>Alamat: <textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                <tr><td>Jenis kelamin:</td>
                    <td>
                        <input type="radio" name="sex" value="L">Laki-laki
                        <input type="radio" name="sex" value="P">perempuan
                    </td>
                </tr>
                <tr><td>Pilih pekerjaan:</td>
                <td>
                    <select name="job">
                        <option value="Petani">Pekerjaanku adalah petani</option>
                        <option value="Guru">Pekerjaanku adalah guru</option>
                        <option value="doeter">Pekerjaanku adalah dokter</option>
                    </select>
                </td></tr>
                <tr><td>Status Menikah:</td><td><input type="chekbox" name="status" value="Menikah">Ya</td></tr>
            </table>
            <input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
        </form>
    </body>
</html>