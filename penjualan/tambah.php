<?php

include 'koneksi.php';

?>

<br>
<br>

<h1>Transaksi</h1>

<hr>

<form action="?page=penjualan/simpan" method="post">

    <div class="mb-3">
        <label class="form-label">Berat Pupuk</label>
        <input type="number" class="form-control" name="berat_pupuk">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga_terjual">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Qty</label>
        <input type="number" class="form-control" name="qty">
        <div class="form-text"></div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" class="form-control" name="tanggal">
        <div class="form-text"></div>
    </div>
    <br>

    <button class="btn btn-success">Simpan</button>

</form>