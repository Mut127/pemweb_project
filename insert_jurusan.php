<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id_jurusan = $_POST['id_jurusan'];
    $id_kajur = $_POST['id_kajur'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $kuota = $_POST['kuota'];
    $insert = "insert into jurusan(id_jurusan, id_kajur, nama_jurusan, kuota)
    values('$id_jurusan','$id_kajur','$nama_jurusan','$kuota')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='view_jurusan.php';
        </script>
        <?php
    }
}
?>
<html>
<head>
</head>
<body>
    <h1>Tambah Jurusan</h1>
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Id Jurusan</td>
        <td>
            <input type="text" name="id_jurusan" required />
        </td>
    </tr>
    <tr>
        <td>Id Kajur</td>
        <td>
            <input type="text" name="id_kajur" required />
        </td>
       
    </tr>
    <tr>
        <td>Nama Jurusan</td>
        <td>
            <input type="text" name="nama_jurusan" required />
        </td>
        
    </tr>
    <tr>
        <td>Kuota</td>
        <td>
            <input type="number" name="kuota" required />
        </td>
        
    </tr>
   <tr>
        <td></td>
        <td> 
            <input type="submit" name="input" value='DAFTAR' />
        </td>
   </tr>
</table>
</form>
</body>
</html>
