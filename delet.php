<?php
include 'koneksi.php';

$kode_mahasiswa=$_GET ['id'];

mysqli_query($koneksi, "delete from mahasiswa where kode_mahasiswa= '$kode_mahasiswa'");

header("location:index.php");

?>