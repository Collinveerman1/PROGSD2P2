<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header_index.php'; ?>
<h1>
    Let's start here - Lil Yachty - Tracklist
</h1>
<section><img src="img/album.png" alt="" width="300px"></section>
    <?php
    lees_bestand('album.txt');
    ?>
<?php include SHARED_PATH . '/footer_index.php'; ?>
