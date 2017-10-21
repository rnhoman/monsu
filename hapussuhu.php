<?php 
    include 'koneksi.php';
    $id_sensor = $_GET['id_sensor'];
    $query_hapus = mysqli_query($koneksi, "DELETE FROM allsensor WHERE id_sensor='$id_sensor'");

    if ($query_hapus) 
    {
        echo "<script>alert('Suhu berhasil dihapus');</script>";
        echo "<script>location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Suhu gagal dihapus');</script>";

    }
?>