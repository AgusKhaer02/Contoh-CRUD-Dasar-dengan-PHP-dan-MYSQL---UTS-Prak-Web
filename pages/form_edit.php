<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit</title>
</head>
<body>

<?php
    include "../connection.php";
    
    $idBiodata = $_GET['id_biodata'];
    $query = mysqli_query($conn, "SELECT * FROM biodata WHERE id_biodata = '$idBiodata'");
    $result = mysqli_fetch_assoc($query);
?>
<form action="../proses/edit.php" method="POST" enctype="multipart/form-data">
        <table>
            <input value="<?= $idBiodata?>"type="text" name="id_biodata" hidden>
            <input value="<?= $result['pass_foto']?>"type="text" name="current_image" hidden>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value="<?= $result['nama_lengkap']?>"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value="<?= $result['tempat_lahir']?>"> / <input type="date" name="tanggal_lahir" value="<?= $result['tanggal_lahir']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php
                        $jk = ['L','P'];
                        $jk_namaTerang = ['Laki-Laki','Perempuan'];

                        for ($index=0;$index < count($jk); $index++) {
                            ?>
                    <input type="radio" name="jenis_kelamin" value="<?= $jk[$index]?>"  <?= ($jk[$index] === $result['jenis_kelamin']) ? 'checked="checked"' : '' ?>> <?= $jk_namaTerang[$index]?> <br>
                    <?php
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" value="<?= $result['asal_sekolah']?>"></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td><input type="text" name="gol_darah" value="<?= $result['golongan_darah']?>"></td>
            </tr>
            <tr>
                <td>Daerah Asal</td>
                <td>:</td>
                <td><input type="text" name="daerah_asal" value="<?= $result['daerah_asal']?>" ></td>
            </tr>
            <tr>
                <td>Alamat Domisili</td>
                <td>:</td>
                <td>
                    <textarea name="alamat_domisili" cols="30" rows="10"><?= $result['alamat_domisili']?></textarea>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>

                    <?php
                        $agama = [
                            "Islam","Kristen","Hindu","Buddha","Konghucu"
                        ];


                    ?>
                    <select name="agama">
                        <?php
                            foreach ($agama as $value) {
                        ?>
                        <option value="<?= $value?>" <?= ($result['agama'] === $value) ? 'selected' : ''?>><?= $value?></option>
                        <?php
                            }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><input type="text" name="program_studi" value="<?= $result['program_studi']?>"></td>
            </tr>
            <tr>
                <td>Hobbi</td>
                <td>:</td>
                <td><input type="text" name="hobbi" value="<?= $result['hobbi']?>"></td>
            </tr>
            <tr>
                <td>Motto Hidup</td>
                <td>:</td>
                <td><input type="text" name="motto" value="<?= $result['motto_hidup']?>"></td>
            </tr>
            <tr>
                <td>Keahlian Khusus</td>
                <td>:</td>
                <td><input type="text" name="keahlian" value="<?= $result['keahlian_khusus']?>"></td>
            </tr>
            <tr>
                <td>NO Handphone</td>
                <td>:</td>
                <td>
                    <input type="text" name="no_handphone" placeholder="contoh : +6289xxxxxxx" value="<?= $result['no_hp']?>">
                </td>
            </tr>
            <tr>
                <td>Pengalaman</td>
                <td>:</td>
                <td><input type="text" name="pengalaman" value="<?= $result['pengalaman']?>"></td>
            </tr>
            <tr>
                <td>Pass Foto</td>
                <td>:</td>
                <td><input type="file" name="pass_foto" value="<?= $result['pass_foto']?>"></td>
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