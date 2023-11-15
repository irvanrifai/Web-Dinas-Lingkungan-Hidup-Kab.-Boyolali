<?php

require "function.php";

$id = $_GET["id"];

$home = query("SELECT * FROM jumbo_tron WHERE id=$id")[0];

if(isset($_POST["submit"]))	{	
	//cek jika data berhasil diedit
	if (edit($_POST) > 0){
		echo "
		<script>
		alert('data berhasil diedit');
		document.location.href = '../../admin.php';
		</script>
		";
	}
	else{
		echo "
		<script>
		alert('data gagal diedit');
		document.location.href = '../../admin.php';
		</script>
		";
	}
}
?>

<html>
<head>
<title>Edit</title>
</head>
<body>
<h1>Edit Carousel</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<input type='hidden' name='id' value="<?= $home["id"]; ?>">
<input type='hidden' name='jumbo_tronLama' value="<?= $home['jumbo_tron'];?>">
<table>
<tr>
<td><label for='jumbo_tron'>Gambar :</label></td>
<td><img src="../../img/<?= $home["jumbo_tron"]; ?>" width="50" height="40"></td>
<td><input type='file' name='jumbo_tron' id='jumbo_tron' required/></td>
</tr>
<tr>
<td><label for='judul'>Judul :</label></td>
<td><input type='text' name='judul' id='judul' maxlength="75" required value="<?= $home["judul"]; ?>"/></td>
</tr>
<tr>
<td><label for='keterangan'>Keterangan :</label></td>
<td><input type='text' name='keterangan' id='keterangan' maxlength="150" required value="<?= $home["keterangan"]; ?>"/></td>
</tr>
</table>
<button type='submit' name='submit'>Save Data</button>
</form>
</body>
</html>