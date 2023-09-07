<?php
// koneksi database
include('../koneksi.php');
$queryMenu = mysqli_query($koneksi, "SELECT orders.*, menu.*
                                     FROM orders
                                     INNER JOIN menu ON orders.id_barang=menu.id_menu");
?>

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Costumer</th>
            <th scope="col">Menu</th>
            <th scope="col">No Meja</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <?php
    $no = 1;
    foreach ($queryMenu as $data => $costumer) :
    ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?= $costumer['nama']; ?></td>
                <td><?= $costumer['nama_menu']; ?></td>
                <td><?= $costumer['no_meja']; ?></td>
                <td><?= $costumer['jumlah']; ?> pcs</td>
                <td><?= $costumer['date']; ?></td>
                <?php if ($costumer['status_pesanan'] == 0) { ?>
                    <td><span class="p-1 bg-danger rounded text-white">Belum Diantar</span></td>
                <?php } else { ?>
                    <td><span class="p-1 bg-success rounded text-white">Sudah Diantar</span></td>
                <?php } ?>
                <td>
                    <?php if ($costumer['status_pesanan'] == 1) { ?>
                        <span disabled>&#9989;</span>
                    <?php } else {
                    ?>
                        <a href="status.php?id=<?= $costumer['id'] ?>"><span class="p-1 bg-primary text-white rounded">Antar Sekarang</span></a>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>