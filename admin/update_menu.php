<?php
// koneksi databse
include('../koneksi.php');

$id = $_POST['id'];
$nama_menu = $_POST['nama_menu'];
$category_id = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$xx = $rand . '_' . $filename;

if ($filename == "") {
  $query = mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama_menu',
                                                 id_category='$category_id',
                                                 harga='$harga',
                                                 deskripsi='$deskripsi'
                                             WHERE id_menu='$id'");
  if ($query) {
    echo "<script>
            alert('Update data menu berhasil');
            window.location='data.php';
          </script>";
  } else {

    echo "<script>
            alert('Data gagal di diupdate');
            window.location='data.php';
          </script>";
  }
} elseif (!in_array($ext, $ekstensi)) {
  echo "<script>
            alert('Ekstensi tidak diperbolehkan!');
            history.go(-1);
          </script>";
} else {

  if ($ukuran < 2044070) {
    move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/' . $rand . '_' . $filename);
    $query = mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama_menu',
                                                 id_category='$category_id',
                                                 harga='$harga',
                                                 deskripsi='$deskripsi',
                                                 menu_photo='$xx'
                                             WHERE id_menu='$id'");
    if ($query) {
      echo "<script>
            alert('Update data menu berhasil');
            window.location='data.php';
          </script>";
    } else {

      echo "<script>
            alert('Data gagal di diupdate');
            window.location='data.php';
          </script>";
    }
  } else {
    echo "<script>
            alert('Ukuran file terlalu besar!');
            window.location='data.php';
          </script>";
  }
}
