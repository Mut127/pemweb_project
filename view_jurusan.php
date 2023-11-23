<?php
include "koneksi.php";
if(isset($_GET['id_jurusan'])){
    $nisn = $_GET['id_jurusan'];
    if($nisn !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from jurusan where id_jurusan= '$id_jurusan' "));
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
    <h1>Daftar Jurusan</h1>
    <p>
        <a href='insert_jurusan.php'>Tambah Data</a>
    </p>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
            <th>No</th>
            <th>ID Jurusan</th>
            <th>ID Kajur</th>
            <th>Nama Jurusan</th>
            <th>Kuota</th>
            <th>Aksi</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from jurusan order by id_jurusan desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[id_jurusan]</td>
            <td>$row[id_kajur]</td>
            <td>$row[nama_jurusan]</td>
            <td>$row[kuota]</td>
            <td> <a href='update_jurusan.php?upd=$row[id_jurusan]'> Edit </a> &nbsp;
            <a href='view_jurusan.php?id_jurusan=$row[id_jurusan]'> Hapus </a>
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