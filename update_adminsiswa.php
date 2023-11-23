<?php
include "koneksi.php";
$upd = $_GET['upd'];
$nisn = $_POST['nisn'];
$no_kk = $_POST['no_kk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$telepon_ayah = $_POST['telepon_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$telepon_ibu = $_POST['telepon_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_ujian= $_POST['nilai_ujian'];
$pilihan_jurusan = $_POST['pilihan_jurusan'];
$update = $_POST['update'];

if(isset($update)){
	$update="update calon_siswa set nisn='$nisn',no_kk='$no_kk',nik='$nik', nama='$nama',
	tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin',
	 agama='$agama', alamat='$alamat', nama_ayah='$nama_ayah', telepon_ayah='$telepon_ayah', 
	 pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu', telepon_ibu='$telepon_ibu', 
	 pekerjaan_ibu='$pekerjaan_ibu',asal_sekolah='$asal_sekolah', nilai_ujian='$nilai_ujian',
	  pilihan_jurusan='$pilihan_jurusan' where nisn='$nisn'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); document.location='view_adminsiswa.php';</script>
		<?php
	}
}

$sql = "select * from calon_siswa where nisn='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
if($hasil['nisn']!=""){
	?>
<form name='formulir' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<table align='center' border='0'>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td>
		<input name='nisn' type='number' value='<?php echo $hasil['nisn']; ?>'>
		</td>
	</tr>
	<tr>
		<td>NO. KK</td>
		<td>:</td>
		<td>
		<input name='no_kk' type='text' value='<?php echo $hasil['no_kk']; ?>'>
		</td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td>
		<input name='nik' type='text' value='<?php echo $hasil['nik']; ?>'>
		</td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td>
		<input name='nama' type='text' value='<?php echo $hasil['nama']; ?>'>
		</td>
	</tr>
	<tr>
		<td>TEMPAT LAHIR</td>
		<td>:</td>
		<td>
		<input name='tempat_lahir' type='text' value='<?php echo $hasil['tempat_lahir']; ?>'>
		</td>
	</tr>
	<tr>
		<td>TANGGAL LAHIR</td>
		<td>:</td>
		<td>
		<input name='tanggal_lahir' type='date' value='<?php echo $hasil['tanggal_lahir']; ?>'>
		</td>
	</tr>
	<tr>
        <td>JENIS KELAMIN</td>
		<td>:</td>
        <td>

		<select name='jenis_kelamin'>
			<option value="LAKI-LAKI" 
			<?php 
			if($hasil['jenis_kelamin']=="LAKI-LAKI"){ echo "selected";}
			?>
			>LAKI-LAKI</option>
			<option value="PEREMPUAN"
			<?php 
			if($hasil['jenis_kelamin']=="PEREMPUAN"){ echo "selected";}
			?>

			>PEREMPUAN</option>
		</select>
        </td>
    </tr>
	<tr>
        <td class="kolom1">AGAMA</td>
		<td>:</td>
        <td>
            <input type="text" name="agama" value='<?php echo $hasil['agama']; ?>'>
        </td>
    </tr>
    <tr>
        <td> ALAMAT </td>
		<td>:</td>
        <td>
            <textarea name="alamat"><?php echo $hasil['alamat']; ?></textarea>
        </td>
    </tr>
	<tr>
        <td class="kolom1">NAMA AYAH</td>
		<td>:</td>
        <td>
		<input type="text" name="nama_ayah" value='<?php echo $hasil['nama_ayah']; ?>'>
        </td>
    </tr>
    <tr>
        <td class="kolom1">NO TELEPON AYAH</td>
		<td>:</td>
        <td>
		<input type="text" name="telepon_ayah" value='<?php echo $hasil['telepon_ayah']; ?>'>
        </td>
       
    </tr>
    <tr>
        <td class="kolom1">PEKERJAAN AYAH</td>
		<td>:</td>
        <td>
            <input type="text" name="pekerjaan_ayah"  value='<?php echo $hasil['pekerjaan_ayah']; ?>'>
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">NAMA IBU</td>
		<td>:</td>
        <td>
            <input type="text" name="nama_ibu" value='<?php echo $hasil['nama_ibu']; ?>'>
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">NO TELEPON IBU</td>
		<td>:</td>
        <td>
            <input type="text" name="telepon_ibu" value='<?php echo $hasil['telepon_ibu']; ?>'>
        </td>
        
    </tr>
    <tr>
        <td class="kolom1">PEKERJAAN IBU</td>
		<td>:</td>
        <td>
            <input type="text"  name="pekerjaan_ibu" value='<?php echo $hasil['pekerjaan_ibu']; ?>'>
        </td>
    </tr>
    <tr>
        <td class="kolom1">ASAL SEKOLAH</td>
		<td>:</td>
        <td>
            <input type="text" name="asal_sekolah" value='<?php echo $hasil['asal_sekolah']; ?>'>
        </td>
    </tr>
    <tr>
        <td class="kolom1">NILAI UJIAN</td>
		<td>:</td>
        <td>
            <input type="text" name="nilai_ujian" value='<?php echo $hasil['nilai_ujian']; ?>'>
        </td>
    </tr>
    <tr>
        <td>PILIHAN JURUSAN</td>
		<td>:</td>
        <td>
		<select name="pilihan_jurusan">
		<?php
			$s = "select * from calon_siswa";
			$q = mysqli_query($conn, $s);
			while($row=mysqli_fetch_array($q)){
				if ($row['pilihan_jurusan'] == $hasil['pilihan_jurusan']) {
					echo "<option value='$row[pilihan_jurusan]' selected>$row[pilihan_jurusan]</option>";
				} else if ($row['pilihan_jurusan'] == $hasil['pilihan_jurusan']) {
					echo "<option value='$row[pilihan_jurusan]'>$row[pilihan_jurusan]</option>";
				} else {
					echo "<option value='$row[pilihan_jurusan]'>$row[pilihan_jurusan]</option>";
				}
				
			}
			?>
		</select>
		
        <!-- <select name="pilihan_jurusan">
                <option value="ipa">IPA</option>
                <option value="ips">IPS</option>
                <option value="bahasa">BAHASA</option>
        </select> -->
        </td>
    </tr>
	<tr>
		<td></td>
		<td></td>
		<td>
		<input type='submit' name='update' value='Update Data'>
		</td>
	</tr>
</table>
</form>
	<?php
}

?>