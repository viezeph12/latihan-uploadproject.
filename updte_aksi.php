<?php
include 'koneksi.php';

// ambil data dari form
$kode_lama = $_POST['kode_lama']; // kode sebelum diubah
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// update data di database
mysqli_query($koneksi, "UPDATE mahasiswa 
                        SET kode_mahasiswa='$kode_mahasiswa', 
                            nama='$nama', 
                            nim='$nim', 
                            jurusan='$jurusan', 
                            alamat='$alamat'
                        WHERE kode_mahasiswa='$kode_lama'");

// balik ke halaman utama
header("location:index.php");
?>
