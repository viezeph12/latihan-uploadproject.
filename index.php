<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class= "container">
    <a href="form.php"> +TAMBAH MAHASISWA </a>
    <br>
    <br>


    <table border= "1">
        <tr>
            <th>No</th>
            <th>Kode Mahasiswa</th>
            <th> Nama</th>
            <th>NIM </th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>


<?php
include 'koneksi.php';
$no = 1;
$data= mysqli_query($koneksi, "select * from mahasiswa");
while($d=mysqli_fetch_array ($data)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td> <?php echo $d ['kode_mahasiswa']?></td>
         <td> <?php echo $d ['nama']?></td>
          <td> <?php echo $d ['nim']?></td>
           <td> <?php echo $d ['jurusan']?></td>
            <td> <?php echo $d ['alamat']?></td>

        <td>
            <a href= "updte.php?id=<?php echo $d ['kode_mahasiswa']; ?> ">UPDATE </a>
            <a href= "delet.php?id=<?php echo $d ['kode_mahasiswa']; ?> ">DELETE </a>
        </td>
    </tr>
    <?php
}
?>
    </table>

    </div>

    
</body>
</html>