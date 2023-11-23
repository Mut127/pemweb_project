<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id_pilihan = $_POST['id_pilihan'];
    $nisn = $_POST['nisn'];
    $id_jurusan = $_POST['id_jurusan'];
    $insert = "insert into pilihan(id_pilihan, nisn, id_jurusan)
    values('$id_pilihan','$nisn','$id_jurusan')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='view_pilihan.php';
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
        <td>ID Pilihan</td>
        <td>
            <input type="text" name="id_pilihan" required />
        </td>
    </tr>
    <tr>
        <td>NISN</td>
        <td>
            <input type="number" name="nisn" required />
        </td>
       
    </tr>
    <tr>
        <td>ID Jurusan</td>
        <td>
            <input type="text" name="id_jurusan" required />
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
