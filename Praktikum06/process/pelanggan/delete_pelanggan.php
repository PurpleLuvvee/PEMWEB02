<?php
    require_once '../../database/dbkoneksi.php';
?>
<?php
    $sql = "DELETE FROM pelanggan WHERE id='$_GET[iddel]'";
    $rs = $dbh->query($sql);

    header("location:../../pages/pelanggan/list_pelanggan.php");
?>