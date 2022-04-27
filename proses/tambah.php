<?php
    include "../connection.php";

    $namaLengkap = $_POST['nama_lengkap'];
    //mengambil nilai gambar
    $foto = $_FILES['pass_foto']['tmp_name'];
    //membuat nama baru untuk gambar
    $passFoto = uniqid().$namaLengkap .".png";

    //proses upload foto
    move_uploaded_file($foto, "../images/" .$passFoto);
    
    $tempatLahir = $_POST['tempat_lahir'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $asalSekolah = $_POST['asal_sekolah'];
    $golDarah = $_POST['gol_darah'];
    $daerahAsal = $_POST['daerah_asal'];
    $alamatDomisili = $_POST['alamat_domisili'];
    $agama = $_POST['agama'];
    $programStudi = $_POST['program_studi'];
    $hobbi = $_POST['hobbi'];
    $motto = $_POST['motto'];
    $keahlian = $_POST['keahlian'];
    $noHandphone = $_POST['no_handphone'];
    $pengalaman = $_POST['pengalaman'];

    $query = mysqli_query($conn, "INSERT INTO biodata VALUES (NULL, '$namaLengkap','$tempatLahir','$tanggalLahir','$jenisKelamin','$asalSekolah','$golDarah','$daerahAsal','$alamatDomisili','$agama','$programStudi','$hobbi','$motto','$keahlian','$noHandphone','$pengalaman','$passFoto')") or die(mysqli_error($conn));
    if ($query) {
        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location.href = '../index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data tidak berhasil disimpan, silahkan coba lagi');
            window.location.href = '../pages/form_tambah.php';
        </script>
        ";
    }


?>