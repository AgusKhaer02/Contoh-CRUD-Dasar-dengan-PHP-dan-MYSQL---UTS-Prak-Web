<?php


    include "../connection.php";


    $idBiodata = $_GET['id_biodata'];
    $currentImage = $_GET['current_image'];
    $query = mysqli_query($conn, "DELETE FROM biodata WHERE id_biodata='$idBiodata'") or die(mysqli_error($conn));
    unlink('../images/'.$currentImage);

    if ($query) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location.href = '../index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data tidak berhasil dihapus, silahkan coba lagi');
            window.location.href = '../index.php';
        </script>
        ";
    }
?>