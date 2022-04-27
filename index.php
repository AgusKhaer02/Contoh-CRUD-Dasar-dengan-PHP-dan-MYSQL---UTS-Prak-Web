<h1>Biodata Saya</h1>


<a href="pages/form_tambah.php"> Tambah data</a>
<table border="1">
    <tr>
        <th>Nama Lengkap</th>
        <th>Tempat/ Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Asal Sekolah</th>
        <th>Gol. Darah</th>
        <th>Daerah Asal</th>
        <th>Alamat Domisili</th>
        <th>Agama</th>
        <th>Program Studi</th>
        <th>Hobbi</th>
        <th>Motto Hidup</th>
        <th>Keahlian Khusus</th>
        <th>No Handphone</th>
        <th>Pengalaman</th>
        <th>Pass Foto</th>
        <th>Actions</th>
    </tr>

    <?php
        include "connection.php";
        $query = mysqli_query($conn,"SELECT * FROM biodata") or die(mysqli_error($conn));
        while ($result = mysqli_fetch_array($query)) {
            ?>
    <tr>
        <td><?= $result['nama_lengkap'] ?></td>
        <td><?= $result['tempat_lahir'].'/'.$result['tanggal_lahir'] ?></td>
        <td><?= $result['jenis_kelamin'] ?></td>
        <td><?= $result['asal_sekolah'] ?></td>
        <td><?= $result['golongan_darah'] ?></td>
        <td><?= $result['daerah_asal'] ?></td>
        <td><?= $result['alamat_domisili'] ?></td>
        <td><?= $result['agama'] ?></td>
        <td><?= $result['program_studi'] ?></td>
        <td><?= $result['hobbi'] ?></td>
        <td><?= $result['motto_hidup'] ?></td>
        <td><?= $result['keahlian_khusus'] ?></td>
        <td><?= $result['no_hp'] ?></td>
        <td><?= $result['pengalaman'] ?></td>
        <td><img src="images/<?= $result['pass_foto'] ?>" alt="<?= $result['pass_foto'] ?>" width="150" height="150"></td>
        <td>
            <a href="pages/form_edit.php?id_biodata=<?= $result['id_biodata'] ?>"> Edit</a>
            <a href="proses/hapus.php?id_biodata=<?= $result['id_biodata'] ?>&current_image=<?= $result['pass_foto'] ?>"> Delete</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>