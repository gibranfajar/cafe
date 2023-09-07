<?php
// koneksi databse
include('../koneksi.php');

$category_name = $_POST['name_category'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
  echo "<script>
            alert('Ekstensi tidak diperbolehkan!');
            history.go(-1);
          </script>";
} else {
  if ($ukuran < 2044070) {
    $xx = $rand . '_' . $filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/' . $rand . '_' . $filename);
    $query = mysqli_query($koneksi, "INSERT INTO categories VALUES(null, '$category_name','$xx') ");
    if ($query) {
      echo "<script>
            alert('Tambah data category berhasil');
            window.location='data.php';
          </script>";
    } else {

      echo "<script>
            alert('Data gagal di tambahkan');
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
