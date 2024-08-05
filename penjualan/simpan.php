<?php

include 'koneksi.php';

$berat_pupuk = $_POST['berat_pupuk'];
$harga_terjual = $_POST['harga_terjual'];
$qty = $_POST['qty'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($koneksi, "INSERT INTO penjualan(berat_pupuk,harga_terjual,qty,tanggal) VALUES('$berat_pupuk','$harga_terjual','$qty','$tanggal')");
header('location:?page=penjualan/index');
