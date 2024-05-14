<?php
    include '../../config/database.php';

    $sql = 'DELETE FROM buku WHERE id_buku='.$_GET['id_buku'];
    $connect->query($sql);
    header('location: index.php');
?>