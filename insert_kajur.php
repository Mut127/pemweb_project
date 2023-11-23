<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id_jurusan = $_POST['id_jurusan'];
    $nama_kajur = $_POST['nama_kajur'];
    $pengampu_jurusan = $_POST['pengampu_jurusan'];
    $insert = "insert into kajur(id_kajur, nama_kajur, pengampu_jurusan)
    values('$id_kajur','$nama_kajur','$pengampu_jurusan')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='view_kajur.php';
        </script>
        <?php
    }
}
?>
<html>
<head>
</head>
<body>
    <h1>Tambah Kajur</h1>
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Id Kajur</td>
        <td>
            <input type="text" name="id_kajur" required />
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama_kajur" required />
        </td>
       
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>
            <input type="text" name="pengampu_jurusan" required />
        </td>
        
    </tr>
   <tr>
        <td></td>
        <td> 
            <input type="submit" name="input" value='DAFTAR' /></td>
   </tr>
</table>
</form>
</body>
</html>
