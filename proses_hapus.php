<?php
    include_once("connection.php");

    if(isset($_GET['id_daftar_pesanan']) && is_numeric($_GET['id_daftar_pesanan'])){
        $id_daftar_pesanan = intval($_GET['id_daftar_pesanan']);

        $sql = "DELETE FROM daftar_pesanan WHERE id_daftar_pesanan = $id_daftar_pesanan";

        mysqli_query($conn, $sql);
        header("Location: list_pemesanan.php");
    }
?>