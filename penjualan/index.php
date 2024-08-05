<?php

include 'koneksi.php';

?>

<br>
<br>

<h1>Data Pupuk dan Penjualan</h1>

<br>

<a href="?page=penjualan/tambah"><button class="btn btn-primary">Tambah Transaksi</button></a>

<hr>

<table class="table table-stripped">

    <tr>
        <td>ID</td>
        <td>Berat Pupuk</td>
        <td>Harga Terjual</td>
        <td>Qty</td>
        <td>Tanggal</td>
        <td>Aksi</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM penjualan");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['berat_pupuk'] ?> Kg</td>
            <td><?php echo $data['harga_terjual'] ?></td>
            <td><?php echo $data['qty'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td>
                <a href="?page=penjualan/hapus&id=<?php echo $data['id'] ?>"><button class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>