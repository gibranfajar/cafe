<?php
include('../koneksi.php');

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM cart WHERE id='$id' ");
header('Location: menu.php');
