<?php
include "koneksi.php";
$upd = $_GET['upd'];
$id_jurusan = $_POST['id_jurusan'];
$id_kajur = $_POST['id_kajur'];
$nama_jurusan = $_POST['nama_jurusan'];
$kuota = $_POST['kuota'];
$update = $_POST['update'];

if(isset($update)){
	$update="update jurusan set id_jurusan='$id_jurusan', id_kajur='$id_kajur', nama_jurusan='$nama_jurusan', kuota='$kuota' where id_jurusan='$id_jurusan'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Jurusan Berhasil Diubah!'); document.location='view_jurusan.php';</script>
		<?php
	}
}

$sql = "select * from jurusan where id_jurusan='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
if($hasil['id_jurusan']!=""){
	?>
<form name='formulir' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<table align='center' border='0'>
	<tr>
		<td>Id Jurusan</td>
		<td>:</td>
		<td>
		<input name='id_jurusan' type='text' value='<?php echo $hasil['id_jurusan']; ?>'>
		</td>
	</tr>
	<tr>
		<td>ID Kajur</td>
		<td>:</td>
		<td>
		<input name='id_kajur' type='text' value='<?php echo $hasil['id_kajur']; ?>'>
		</td>
	</tr>
	<tr>
		<td>Nama Jurusan</td>
		<td>:</td>
		<td>
		<input name='nama_jurusan' type='text' value='<?php echo $hasil['nama_jurusan']; ?>'>
		</td>
	</tr>
    <tr>
		<td>kuota</td>
		<td>:</td>
		<td>
		<input name='kuota' type='number' value='<?php echo $hasil['kuota']; ?>'>
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