<?php
session_start();
if (empty($_SESSION['nama'])) {
    echo "<script>
            alert('Silahkan input nama terlebih dahulu');
            window.location='form.php';
          </script>";
} else {

?>

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

                <div class="col-md-4 p-3 m-3 card shadow">
                    <form action="cart.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Pilih Menu</label>
                            <select class="form-select" name="id_menu" id="" required>
                                <option value="">-Pilih Menu-</option>
                                <?php
                                include('../koneksi.php');
                                $query = mysqli_query($koneksi, "SELECT * FROM menu");
                                foreach ($query as $data) : ?>
                                    <option value="<?= $data['id_menu'] ?>"><?= $data['nama_menu'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Input Keranjang</button>
                    </form>
                </div>

                <div class="col-md-6 p-3 m-3 card shadow">
                    <form action="order.php" method="post">
                        <h2>Items Keranjang</h2>
                        <table class="table table-bordered border-dark text-center">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Barang</td>
                                    <td>Harga</td>
                                    <td>Jumlah</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT menu.*, cart.*
                                             FROM cart
                                             INNER JOIN menu ON menu.id_menu=cart.id_menu WHERE cart.nama='$_SESSION[nama]' ");
                                foreach ($query as $data) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama_menu'] ?></td>
                                        <td><?= $data['harga'] ?></td>
                                        <td><?= $data['jumlah'] ?></td>
                                        <td>
                                            <a href="del.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        <input type="number" name="meja" id="" class="form-control my-2 " placeholder="Masukkan No Meja" required>
                        <button type="submit" class="btn btn-success" name="checkout">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>