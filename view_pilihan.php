<?php
include "koneksi.php";
if(isset($_GET['id_pilihan'])){
    $id_pilihan = $_GET['id_pilihan'];
    if($id_pilihan !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from pilihan where id_pilihan= '$id_pilihan' "));
        $hapus = "delete from pilihan where id_pilihan= '$id_pilihan' ";
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
    <h1>Data Pilihan</h1>
    <p>
        <a href='insert_pilihan.php'>Tambah Data</a>
    </p>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
        <th>No</th>
            <th>ID Pilihan</th>
            <th>NISN</th>
            <th>ID Jurusan</th>
            <th>Aksi</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from pilihan order by id_pilihan desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
        <td>$no</td>
        <td>$row[id_pilihan]</td>
        <td>$row[nisn]</td>
        <td>$row[id_jurusan]</td>
            <td> <a href='update_pilihan.php?upd=$row[id_pilihan]'> Edit </a> &nbsp;
            <a href='view_pilihan.php?id_pilihan=$row[id_pilihan]'> Hapus </a>
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