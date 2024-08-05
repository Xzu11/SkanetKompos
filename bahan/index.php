<?php

include 'koneksi.php';

?>

<br>
<br>

<h1>Data Bahan</h1>

<a href="?page=bahan/tambah"><button class="btn btn-primary">Tambah</button></a>

<hr>

<table class="table table-stripped">

    <tr>
        <td>ID</td>
        <td>Nama Barang</td>
        <td>Stok</td>
        <td>Harga</td>
        <td>Tanggal</td>
        <td>Aksi</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM bahan");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['nama_barang'] ?></td>
            <td><?php echo $data['stok'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td>
                <a href="?page=bahan/edit&id=<?php echo $data['id'] ?>"><button class="btn btn-warning">Edit</button></a>
                <a href="?page=bahan/hapus&id=<?php echo $data['id'] ?>"><button class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>