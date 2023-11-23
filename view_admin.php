<?php
include "koneksi.php";
if(isset($_GET['id_admin'])){
    $id_admin = $_GET['id_admin'];
    if($id_admin !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from admin where id_admin= '$id_admin' "));
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
    <h1>Data Admin</h1>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
            <th>No</th>
            <th>ID Admin</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from admin order by id_admin desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[id_admin]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
        </tr>
        ";
        $no++;
       }
       ?>
    </table>
</center>
</body>
</html>