<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 md-6 p-3 card shadow">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" name="nama" id="">
                    </div>
                    <button type="submit" name="session" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['session'])) {
    session_start();
    $_SESSION['nama'] = $_POST['nama'];

    if ($_SESSION['nama'] == "") {
        echo "<script>
            alert('Opss, Inputkan nama anda dulu!');
            history.go(-1);
          </script>";
    } else {
        echo "<script>
                alert('Selamat Berbelanja $_SESSION[nama]');
                window.location='menu.php';
              </script>";
    }
}

?>