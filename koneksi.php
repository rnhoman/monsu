<?php 
    // koneksi ke database
    // hal yg harus diganti saat koneksikan ke arduino
    // localhost diganti dengan ip 127.0.0.1
    // root merupakan username
    // "" = merupakan password
    // sensor = nama database
    $koneksi = new mysqli ("localhost", "root", "", "monsu");

    // cek koneksi
    if ($koneksi->connect_error)
    {
        echo "tidak terkoneksi dengan database: ".$mysqli->connect_error;
    }
?>