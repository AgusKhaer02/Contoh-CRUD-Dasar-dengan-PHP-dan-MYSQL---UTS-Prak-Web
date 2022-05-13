<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Admin</title>
</head>
<body>
    <h1>Biodata Saya</h1>


    <a href="pages/form_tambah.php" class="btn btn-primary btn-lg"> Tambah data</a>

        <?php
            include "connection.php";
            $query = mysqli_query($conn,"SELECT * FROM biodata") or die(mysqli_error($conn));
            while ($result = mysqli_fetch_array($query)) {
                ?>

            <div class="admin-bio-card m-2 p-5">
                <div class="row">
                    <div class="col-md-2">
                        <div class="label">Nama Lengkap</div>
                        <?= $result['nama_lengkap'] ?> <br>
                        <div class="label">Tempat/Tanggal Lahir</div>
                        <?= $result['tempat_lahir'].'/'.$result['tanggal_lahir'] ?> <br>
                        <div class="label">Jenis Kelamin</div>
                        <?php
                            switch ($result['jenis_kelamin']) {
                                case 'L':
                                    echo "Laki-Laki";
                                    break;
                                
                                default:
                                    echo "Perempuan";
                                    break;
                            }
                        
                        ?>
                    </div>
                    <div class="col-md-5">
                        <div class="label">Asal Sekolah</div>
                        <?= $result['asal_sekolah'] ?> <br>
                        <div class="label">Golongan Darah</div>
                        <?= $result['golongan_darah'] ?> <br>
                        <div class="label">Daerah Asal</div>
                        <?= $result['daerah_asal'] ?> <br>
                        <div class="label">Alamat Domisili</div>
                        <?= $result['alamat_domisili'] ?>
                    </div>
                    <div class="col-md-5">
                        <div class="label">Agama</div>
                        <?= $result['agama'] ?> <br>
                        <div class="label">Program Studi</div>
                        <?= $result['program_studi'] ?> <br>
                        <div class="label">Hobbi</div>
                        <?= $result['hobbi'] ?> <br>
                        <div class="label">Motto Hidup</div>
                        <?= $result['motto_hidup'] ?>
                    </div>

                    <div class="col-md-5">
                        <div class="label">Keahlian Khusus</div>
                        <?= $result['keahlian_khusus'] ?>
                        <div class="label">No Handphone</div>
                        <?= $result['no_hp'] ?>
                        <div class="label">Pengalaman</div>
                        <?= $result['pengalaman'] ?>
                    </div>
                    <div class="col-md-5">
                        <div class="label">Pass Foto</div>
                        <img src="images/<?= $result['pass_foto'] ?>" alt="<?= $result['pass_foto'] ?>" width="150" height="150">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    <a href="pages/form_edit.php?id_biodata=<?= $result['id_biodata'] ?>" class="btn btn-warning btn-lg"> Edit</a>
                    <a href="proses/hapus.php?id_biodata=<?= $result['id_biodata'] ?>&current_image=<?= $result['pass_foto'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-lg"> Delete</a>
                    </div>
                </div>
            </div>

        <?php
            }
        ?>
</body>
</html>

