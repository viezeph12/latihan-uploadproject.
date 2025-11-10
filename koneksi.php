<?php //membuka koneksi database
$koneksi= mysqli_connect("localhost", "root", "mysql", "latihan");

//cek koneksi
if (mysqli_connect_error()) {
    echo "ERROR CODE !!!". mysqli_connect_error();
} else {
    echo "HORE BERHASIL!!";
}
?>