<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM MAHASISWA</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class= "container" >
    <h2>PENGISIAN FORUM MAHASISWA</h2>
    <h3>TAMBAH MAHASISWA</h3>
    <br>
    <br>

    <form method ="post" action="aksi.php">
    <fieldset>
        <legend>SILAHKAN DIISI!</legend>

        <table>
        <tr>
            <td> kode_mahasiwa: </td>
            <td> <input type="text" name= "kode_mahasiswa"> </td>
        </tr>

        <tr>
            <td> nama: </td>
            <td> <input type="text" name= "nama"> </td>
        </tr>

        <tr>
            <td> nim: </td>
            <td> <input type="number" name= "nim"> </td>
        </tr>

        <tr>
            <td> jurusan: </td>
            <td> <input type="text" name= "jurusan"> </td>
        </tr>

        <tr>
            <td> alamat: </td>
            <td> <input type="text" name= "alamat"> </td>
        </tr>

        </table>
        <button type= "submit"> SIMPAN </button>
    </fieldset>
    </form>

    </div>
</body>
</html>