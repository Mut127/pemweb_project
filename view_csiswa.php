<?php
include "koneksi.php";
if(isset($_GET['nisn'])){
    $nisn = $_GET['nisn'];
    if($nisn !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from calon_siswa where nisn= '$nisn' "));
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
    <h1>Data Calon Siswa</h1>
    <table border="1">
        <tr style="background-color: #F2F2F2; font-weight: bold;">
            <th>No</th>
            <th>NISN</th>
            <th>No KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Nama Ayah</th>
            <th>No.Telepon Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>Nama Ibu</th>
            <th>No.Telepon Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>Asal Sekolah</th>
            <th>Nilai Ujian</th>
            <th>Pilihan Jurusan</th>
        </tr>
       <?php
       $no = 1;
       $sql = "select * from calon_siswa order by nisn desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[nisn]</td>
            <td>$row[no_kk]</td>
            <td>$row[nik]</td>
            <td>$row[nama]</td>
            <td>$row[tempat_lahir]</td>
            <td>$row[tanggal_lahir]</td>
            <td>$row[jenis_kelamin]</td>
            <td>$row[agama]</td>
            <td>$row[alamat]</td>
            <td>$row[nama_ayah]</td>
            <td>$row[telepon_ayah]</td>
            <td>$row[pekerjaan_ayah]</td>
            <td>$row[nama_ibu]</td>
            <td>$row[telepon_ibu]</td>
            <td>$row[pekerjaan_ibu]</td>
            <td>$row[asal_sekolah]</td>
            <td>$row[nilai_ujian]</td>
            <td>$row[pilihan_jurusan]</td>
        </tr>
        ";
        $no++;
       }
       ?>
    </table>
</center>
</body>
</html>