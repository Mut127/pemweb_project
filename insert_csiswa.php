<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $nisn = $_POST['nisn'];
    $no_kk = $_POST['no_kk'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $telepon_ayah = $_POST['telepon_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $telepon_ibu = $_POST['telepon_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nilai_ujian = $_POST['nilai_ujian'];
    $pilihan_jurusan = $_POST['pilihan_jurusan'];
    $insert = "insert into calon_siswa(nisn,no_kk,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,
    nama_ayah, telepon_ayah, pekerjaan_ayah, nama_ibu, telepon_ibu, pekerjaan_ibu, asal_sekolah,nilai_ujian,pilihan_jurusan)
    values('$nisn','$no_kk','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat',
    '$nama_ayah', '$telepon_ayah', '$pekerjaan_ayah', '$nama_ibu', '$telepon_ibu', '$pekerjaan_ibu','$asal_sekolah','$nilai_ujian','$pilihan_jurusan')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Terimakasih Sudah Mendaftar!');
            document.location='view_csiswa.php';
        </script>
        <?php
    }
}
?>
<html>
<head>
</head>
<body>
    <h1>Formulir Pendaftaran Siswa Baru</h1>
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td class="kolom1">NISN</td>
        <td>
            <input type="number" name="nisn" required />
        </td>
    </tr>
    <tr>
        <td class="kolom1">NO. KK</td>
        <td>
            <input type="text" name="no.kk" required />
        </td>
       
    </tr>
    <tr>
        <td class="kolom1">NIK</td>
        <td>
            <input type="text" name="nik" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">NAMA</td>
        <td>
            <input type="text" name="nama" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">TEMPAT LAHIR</td>
        <td>
            <input type="text" name="tempat_lahir" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">TANGGAL LAHIR</td>
        <td>
            <input type="date"  name="tanggal_lahir" required />
        </td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td>
        <select name="jenis_kelamin">
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
        </select>
        </td>
    </tr>
    <tr>
        <td class="kolom1">AGAMA</td>
        <td>
            <input type="text" name="agama" required />
        </td>
    </tr>
    <tr>
        <td> ALAMAT </td>
        <td>
            <textarea name="alamat" required></textarea>
        </td>
    </tr>
    <tr>
        <td class="kolom1">NAMA AYAH</td>
        <td>
            <input type="text" name="nama_ayah" required />
        </td>
    </tr>
    <tr>
        <td class="kolom1">NO TELEPON AYAH</td>
        <td>
            <input type="text" name="telepon_ayah" required />
        </td>
       
    </tr>
    <tr>
        <td class="kolom1">PEKERJAAN AYAH</td>
        <td>
            <input type="text" name="pekerjaan_ayah" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">NAMA IBU</td>
        <td>
            <input type="text" name="nama_ibu" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">NO TELEPON IBU</td>
        <td>
            <input type="text" name="telepon_ibu" required />
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">PEKERJAAN IBU</td>
        <td>
            <input type="text"  name="pekerjaan_ibu" required />
        </td>
    </tr>
    <tr>
        <td class="kolom1">ASAL SEKOLAH</td>
        <td>
            <input type="text" name="asal_sekolah" required />
        </td>
    </tr>
    <tr>
        <td class="kolom1">NILAI UJIAN</td>
        <td>
            <input type="text" name="nilai_ujian" required />
        </td>
    </tr>
    <tr>
        <td>PILIHAN JURUSAN</td>
        <td>
        <select name="pilihan_jurusan">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="BAHASA">BAHASA</option>
        </select>
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
