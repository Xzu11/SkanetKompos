<?php

include 'koneksi.php';

?>

<br>
<br>

<h1>Tambah Data Bahan Penjualan</h1>

<hr>

<form action="?page=bahan_penjualan/index" method="post">

    <div class="mb-3">
        <label class=""></label>
        <input type="number" name="Nota" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">ID Penjualan</label>
        <select name="id_Penjualan" id="" class="form-select">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM penjualan");
            $data = mysqli_fetch_array($query);
            ?>
            <option value="id_penjualan"><?php echo $data['id'] ?></option>
        </select>
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class=""></label>
        <select name="id_belanja" id="" class="form-select">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM penjualan");
            $data = mysqli_fetch_array($query);
            ?>
            <option value="id_belanja"><?php echo $data['id'] ?></option>
        </select>
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class=""></label>
        <input type="number" name="Nota" class="form-control">
        <div class="form-text"></div>
    </div>
    <br>

</form>