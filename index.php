<?php
    include_once("connection.php");

    $aktif_menu = "beranda";

    include_once("header.php");
?>

            <div class="konten-pariwisata">
                <div class="info-container">

                    <?php
                        $sql = "SELECT * FROM paket_wisata";
                        $results = mysqli_query($conn, $sql);
                        while($data_paket = mysqli_fetch_array($results))
                        {
                            $path_gambar="images/" . $data_paket['img_paket'];
                    ?>
                    <div class="paket-container">
                        <img src="<?php echo $path_gambar; ?>" alt="Paket Camping">
                        <h3><?php echo $data_paket['nama_paket']; ?></h3>
                        <p><?php echo $data_paket['deskripsi_paket']; ?></p>
                        <a href="form_pendaftaran.php?id_paket_wisata=<?php echo $data_paket['id_paket_wisata']?>">Daftar</a>
                    </div>
                    
                    <?php
                        }
                    ?>

                    <div class="promosi-container">
                        <div class="video-container">
                            <h3>Paket Wisata 1</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/KW9UZLm4O60?si=PXPem5nw5WJUPbMH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </div>
                        <div class="video-container">
                            <h3>Paket Wisata 2</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/KW9UZLm4O60?si=PXPem5nw5WJUPbMH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </div>
                        <div class="video-container">
                            <h3>Paket Wisata 3</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/KW9UZLm4O60?si=PXPem5nw5WJUPbMH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </div>
                        <div class="video-container">
                            <h3>Paket Wisata 4</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/KW9UZLm4O60?si=PXPem5nw5WJUPbMH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </div>
                    </div>
                </div>
            </div>
            
<?php
    include_once("footer.php");
?>