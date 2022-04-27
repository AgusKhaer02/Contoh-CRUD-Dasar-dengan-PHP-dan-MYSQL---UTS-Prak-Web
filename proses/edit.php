<?php
    include "../connection.php";

    $idBiodata = $_POST['id_biodata'];
    $namaLengkap = $_POST['nama_lengkap'];

    //mengambil nilai gambar
    $foto = $_FILES['pass_foto']['tmp_name'];

    $passFoto = $_POST['current_image'];
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
    $query = mysqli_query($conn, "UPDATE biodata SET nama_lengkap = '$namaLengkap', tempat_lahir = '$tempatLahir', tanggal_lahir = '$tanggalLahir', jenis_kelamin = '$jenisKelamin', asal_sekolah = '$asalSekolah', golongan_darah = '$golDarah',daerah_asal = '$daerahAsal',alamat_domisili = '$alamatDomisili',agama = '$agama',program_studi = '$programStudi', hobbi = '$hobbi',motto_hidup='$motto',keahlian_khusus = '$keahlian',no_hp = '$noHandphone',pengalaman = '$pengalaman',pass_foto = '$passFoto' WHERE id_biodata='$idBiodata'") or die(mysqli_error($conn));
    if ($query) {
        echo "
        <script>
            alert('Data berhasil diubah');
            window.location.href = '../index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data tidak berhasil diubah, silahkan coba lagi');
            window.location.href = '../pages/form_edit.php';
        </script>
        ";
    }
?>