<?php
include "koneksi.php";
if(isset($_GET['id_kajur'])){
    $id_kajur = $_GET['id_kajur'];
    if($id_kajur !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from kajur where id_kajur= '$id_kajur' "));
        $hapus = "delete from kajur where id_kajur= '$id_kajur' ";
        $query = mysqli_query($conn, $hapus);
        if($query){
            ?>
            <script>
                alert("Data berhasil dihapus!");
            </script>
            <?php
    }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            background-color: #F2F2F2; /* Warna latar belakang tabel */
        }

        th, td {
            border: 1px solid black;
            padding: 4px; /* Padding pada sel TD */
            text-align: center; /* Teks di tengah sel TD */
        }

        th {
            background-color: #333;
            color: white;
            font-size: 20px;
        }
        td {
            font-size: 18px;
        }

        img {
            margin: 1px; /* Jarak antara gambar dengan border sel TD */
        }
    </style> 
</head>
<body>
<center>
    <h1>Data Kepala Jurusan</h1>
    <p>
        <a href='insert_kajur.php'>Tambah Data</a>
    </p>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
        <th>No</th>
            <th>Id Kajur</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from kajur order by id_kajur desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
        <td>$no</td>
        <td>$row[id_kajur]</td>
        <td>$row[nama_kajur]</td>
        <td>$row[pengampu_jurusan]</td>
            <td> <a href='update_kajur.php?upd=$row[id_kajur]'> Edit </a> &nbsp;
            <a href='view_kajur.php?id_kajur=$row[id_kajur]'> Hapus </a>
            </td>

        </tr>
        ";
        $no++;
       }
       ?>
    </table>
</center>
</body>
</html>