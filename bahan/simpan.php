<?php

include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($koneksi, "INSERT INTO bahan(nama_barang,stok,harga,tanggal) VALUES('$nama_barang','$stok','$harga','$tanggal')");
header('location:?page=bahan/index');
