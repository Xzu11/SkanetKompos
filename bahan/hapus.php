<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM bahan WHERE id = '$id'");
header('location:?page=bahan/index');
