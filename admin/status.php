<?php
include('../koneksi.php');
$id = $_GET['id'];

mysqli_query($koneksi, "UPDATE orders SET status_pesanan='1' WHERE id='$id' ");
header('location:data_costumer.php');
