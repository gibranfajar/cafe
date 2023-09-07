<?php
// koneksi database
include('koneksi.php');
include('head.php');

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass' ");
if ($query) {
  $data = mysqli_fetch_array($query);
  session_start();
  $_SESSION['full_name'] = $data['full_name'];
  $_SESSION['username'] = $data['username'];
  $_SESSION['password'] = $data['password'];

  echo "<script>
            Swal.fire({
                    title: 'Login Behasil',
                    text: 'Welcome $data[full_name]',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                }).then(result => {
                    if (result.isConfirmed) {
                        window.location='admin/dashboard.php'
                    }
                });
          </script>";
} else {

  echo "<script>
            alert('Login Berhasil');
            window.location='admin/dashboard.php';
          </script>";
}
