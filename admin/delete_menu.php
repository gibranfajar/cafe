<?php
// koneksi databse
include('../koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu='$id' ");
if ($query) {
    echo "<script>
            alert('Delete data menu berhasil');
            window.location='data.php';
          </script>";
} else {

    echo "<script>
            alert('Data gagal di Delete');
            window.location='data.php';
          </script>";
}
