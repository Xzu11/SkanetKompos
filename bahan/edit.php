<?php

include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM bahan WHERE id = '$id'");
$data = mysqli_fetch_array($query);

?>

<br>
<br>

<h1>Edit Data Bahan</h1>

<hr>

<form action="?page=bahan/update" method="post">

    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang'] ?>">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control" value="<?php echo $data['stok'] ?>">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal'] ?>">
        <div class="form-text"></div>
    </div>
    <br>

    <button class="btn btn-primary">Simpan</button>

</form>