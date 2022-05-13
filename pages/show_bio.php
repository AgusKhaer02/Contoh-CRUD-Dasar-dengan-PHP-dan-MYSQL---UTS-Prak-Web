<?php
    include "../connection.php";
    $query = mysqli_query($conn,"SELECT * FROM biodata ORDER BY id_biodata ASC LIMIT 1") or die(mysqli_error($conn));
    $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bio</title>
    <link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bio.css">
</head>
<body>
<div class="container">
    <h1 class="title-page">
        MY BIO
    </h1>
</div>

<main>
    <center>
        <div class="container bio-card">
            <div class="row">
                <div class="col p-md-5">
                    <table class="table-bio">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?= $data['nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $data['tempat_lahir']." / ".$data['tanggal_lahir']?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $data['jenis_kelamin']?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td><?= $data['asal_sekolah']?></td>
                        </tr>
                        <tr>
                            <td>Gol. Darah</td>
                            <td>:</td>
                            <td><?= $data['golongan_darah']?></td>
                        </tr>
                        <tr>
                            <td>Daerah Asal</td>
                            <td>:</td>
                            <td><?= $data['daerah_asal']?></td>
                        </tr>
                        <tr>
                            <td>Alamat Domisili</td>
                            <td>:</td>
                            <td><?= $data['alamat_domisili']?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $data['agama']?></td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td><?= $data['program_studi']?></td>
                        </tr>
                        <tr>
                            <td>Hobbi</td>
                            <td>:</td>
                            <td><?= $data['hobbi']?></td>
                        </tr>
                        <tr>
                            <td>Motto Hidup</td>
                            <td>:</td>
                            <td><?= $data['motto_hidup']?></td>
                        </tr>
                        <tr>
                            <td>Keahlian Khusus</td>
                            <td>:</td>
                            <td><?= $data['keahlian_khusus']?></td>
                        </tr>
                        <tr>
                            <td>NO Hp</td>
                            <td>:</td>
                            <td><?= $data['no_hp']?></td>
                        </tr>
                        <tr>
                            <td>Pengalaman</td>
                            <td>:</td>
                            <td><?= $data['pengalaman']?></td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <img src="../images/<?= $data['pass_foto']?>" alt="<?= $data['pass_foto']?>" width="230" height="250">
                </div>
            </div>
        </div>
    </center>

</main>

</body>
</html>