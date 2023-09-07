<?php
session_start();
include('../koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM cart WHERE nama='$_SESSION[nama]' ");
$meja = $_POST['meja'];

if (mysqli_num_rows($query) > 0) {
  foreach ($query as $order) {
    $order = mysqli_query($koneksi, "INSERT INTO orders VALUES(NULL, '$order[id_menu]','$order[jumlah]','$order[nama]','$meja',now(),'0') ");
    mysqli_query($koneksi, "DELETE FROM cart WHERE nama='$_SESSION[nama]' ");
  }
  echo "<script>
            alert('Terimakasih sudah memesan');
            window.location='../index.php';
          </script>";
  session_destroy();
} else {
  echo "<script>
            alert('Opps, Menu kosong, Silahkan pilih menu terlebih dahulu!');
            history.go(-1);
          </script>";
}
