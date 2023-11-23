<?php
include "koneksi.php";
$upd = $_GET['upd'];
$id_kajur = $_POST['id_kajur'];
$nama_kajur = $_POST['nama_kajur'];
$pengampu_jurusan = $_POST['pengampu_jurusan'];
$update = $_POST['update'];

if(isset($update)){
	$update="update kajur set id_kajur='$id_kajur', nama_kajur='$nama_kajur', pengampu_jurusan='$pengampu_jurusan' where id_kajur='$id_kajur'";
	$query = mysqli_query($conn,$update);
	if($query){
		?>
		<script>alert('Data Berhasil Diubah!'); document.location='view_kajur.php';</script>
		<?php
	}
}

$sql = "select * from kajur where id_kajur='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
if($hasil['id_kajur']!=""){
	?>
<form name='formulir' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<table align='center' border='0'>
	<tr>
		<td>Id Kajur</td>
		<td>:</td>
		<td>
		<input name='id_kajur' type='text' value='<?php echo $hasil['id_kajur']; ?>'>
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
		<input name='nama_kajur' type='text' value='<?php echo $hasil['nama_kajur']; ?>'>
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
		<input name='pengampu_jurusan' type='text' value='<?php echo $hasil['pengampu_jurusan']; ?>'>
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