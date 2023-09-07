<?php
session_start();
include('../koneksi.php');

$menu = $_POST['id_menu'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO cart VALUES(null, '$menu','$_SESSION[nama]','$jumlah')");
header('Location:menu.php');
