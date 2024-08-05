<?php

include 'koneksi.php';

?>

<br>
<br>

<h1>Data Bahan Penjualan</h1>

<br>

<a href="?page=penjualan_bahan/index"><button class="btn btn-primary">Tambah</button></a>

<hr>

<table class="table table-stripped">

    <tr>
        <td>ID</td>
        <td>Nota</td>
        <td>ID Penjualan</td>
        <td>ID Belanja</td>
        <td>Qty Barang</td>
        <td>Tanggal</td>
        <td>Aksi</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM bahan_penjualan");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['nota'] ?></td>
            <td><?php echo $data['id_penjualan'] ?></td>
            <td><?php echo $data['id_belanja'] ?></td>
            <td><?php echo $data['qty_barang'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td>
                <a href="?page=bahan_penjualan/edit&id=<?php echo $data['id'] ?>"><button class="btn btn-warning">Edit</button></a>
                <a href="?page=bahan_penjualan/hapus&id=<?php echo $data['id'] ?>"><button class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>