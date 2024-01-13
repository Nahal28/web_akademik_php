<?php   
    include "../config/db_connection.php";

    $sql = "SELECT * FROM mahasiswa";
    $mahasiswa = mysqli_query($conn, $sql);

    $jumlah_mhs = 0;
    if(mysqli_num_rows($mahasiswa) > 0) {
        $jumlah_mhs = mysqli_num_rows($mahasiswa);
    } 

    $sql = "SELECT * FROM dosen";
    $dosen = mysqli_query($conn, $sql);

    $jumlah_dosen = 0;
    if(mysqli_num_rows($dosen) >0) {
        $jumlah_dosen = mysqli_num_rows($dosen);
    }
?>