<?php
// koneksi databse
include('../koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM categories WHERE id='$id' ");
if ($query) {
    echo "<script>
            alert('Delete data kategori berhasil');
            window.location='data.php';
          </script>";
} else {

    echo "<script>
            alert('Data gagal di Delete');
            window.location='data.php';
          </script>";
}
