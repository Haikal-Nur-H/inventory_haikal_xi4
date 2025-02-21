<?php

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE barang SET nama_barang='$nama_barang',jenis='$jenis',harga='$harga',stok='$stok',id_jenis='$id_jenis' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('edit berhasil nih cuy !')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('edit gagal nih cuy !')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}