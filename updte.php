<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>DATA MAHASISWA</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>
    <h3>EDIT DATA SISWA</h3>

    <?php
    include 'koneksi.php';
    $kode_mahasiswa=$_GET ['id'];
    $data= mysqli_query($koneksi, "select * from mahasiswa where kode_mahasiswa= '$kode_mahasiswa'");
    while ($d= mysqli_fetch_array ($data)){
        ?>
         <form method ="post" action="updte_aksi.php">
    <fieldset>
        <legend>SILAHKAN DIISI!</legend>

        <table>
        <tr>
            <td> kode_mahasiwa: </td>
            <td> 
                <input type="hidden" name="kode_lama" value="<?php echo $d['kode_mahasiswa']; ?>">
                <input type="text" name= "kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']?>"> 
            </td>
        </tr>

        <tr>
            <td> nama: </td>
            <td> <input type="text" name= "nama" value="<?php echo $d['nama']?>"> </td>
        </tr>

        <tr>
            <td> nim: </td>
            <td> <input type="number" name= "nim"value="<?php echo $d['nim']?>"> </td>
        </tr>

        <tr>
            <td> jurusan: </td>
            <td> <input type="text" name= "jurusan" value="<?php echo $d['jurusan']?>"> </td>
        </tr>

        <tr>
            <td> alamat: </td>
            <td> <input type="text" name= "alamat" value="<?php echo $d['alamat']?>"> </td>
        </tr>

        </table>
                <button type= "submit"> SIMPAN </button>
    </fieldset>
    </form>
    </div>
    <?php
    }
    
    ?>
    
</body>
</html>