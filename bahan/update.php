<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($koneksi, "UPDATE bahan SET nama_barang = '$nama_barang', stok = '$stok', harga = '$harga', tanggal = '$tanggal' WHERE id = '$id'");
header('location:?page=bahan/index');
