<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function renderAktifMenu($val1, $val2){
            $result = "";
            if($val1 == $val2){
                $result = "active-menu";
            }
            return $result;
        }
    ?>
    <div class="main-container">
        <div class="img-header">
            <div class="brand-container">
                <h1>Objek Wisata Alam</h1>
                <h2>Dan Kuliner di Indonesia</h2>
                <img src="images/logo_malino_kuning.png" alt="Logo Malino">
            </div>
            <img src="images/malino_camping_ground.jpg" alt="Camping">
            <img src="images/malino_high_land.jpg" alt="High land">
            <img src="images/malino_hutan_pinus.jpg" alt="Hutan pinus">
            <img src="images/malino_kebun_bunga.jpg" alt="Kebun bunga">
            <img src="images/malino_pool.jpg" alt="Pool">
            <img src="images/malino_puncak.jpg" alt="Puncak">
            <img src="images/malino_resto.jpg" alt="Resto">
            <img src="images/malino_sun_set.jpg" alt="Sunset">
            <img src="images/malino_water_fall.jpg" alt="Water fall">
            <img src="images/malino_kebun_teh.jpg" alt="Kebun teh">
        </div>
        <div class="menu-header">
            <a class="<?php echo renderAktifMenu($aktif_menu, "beranda") ?>" href="index.php">Beranda</a>
            <a class="<?php echo renderAktifMenu($aktif_menu, "form_pendaftaran") ?>" href="form_pendaftaran.php">Daftar Paket Wisata</a>
            <a class="<?php echo renderAktifMenu($aktif_menu, "list_pendaftaran") ?>" href="list_pemesanan.php">Modifikasi Pesanan</a>
        </div>