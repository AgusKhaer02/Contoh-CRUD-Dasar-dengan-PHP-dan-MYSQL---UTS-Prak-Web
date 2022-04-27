<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <form action="../proses/tambah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"> / <input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L"> Laki - Laki <br>
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah"></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td><input type="text" name="gol_darah"></td>
            </tr>
            <tr>
                <td>Daerah Asal</td>
                <td>:</td>
                <td><input type="text" name="daerah_asal"></td>
            </tr>
            <tr>
                <td>Alamat Domisili</td>
                <td>:</td>
                <td>
                    <textarea name="alamat_domisili" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><input type="text" name="program_studi"></td>
            </tr>
            <tr>
                <td>Hobbi</td>
                <td>:</td>
                <td><input type="text" name="hobbi"></td>
            </tr>
            <tr>
                <td>Motto Hidup</td>
                <td>:</td>
                <td><input type="text" name="motto"></td>
            </tr>
            <tr>
                <td>Keahlian Khusus</td>
                <td>:</td>
                <td><input type="text" name="keahlian"></td>
            </tr>
            <tr>
                <td>NO Handphone</td>
                <td>:</td>
                <td>
                    <input type="text" name="no_handphone" placeholder="contoh : +6289xxxxxxx">
                </td>
            </tr>
            <tr>
                <td>Pengalaman</td>
                <td>:</td>
                <td><input type="text" name="pengalaman"></td>
            </tr>
            <tr>
                <td>Pass Foto</td>
                <td>:</td>
                <td><input type="file" name="pass_foto"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>