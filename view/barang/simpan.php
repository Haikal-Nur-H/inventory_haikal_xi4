<?php

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO 
barang VALUES('$id_barang','$nama_barang','$jenis','$harga','$stok','$id_jenis')");

if($query){
    echo "<script>alert('Tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Tambah gagal')</script>";
    echo "<script>window.location.href='index.php'</script>";
}