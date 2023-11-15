<?php

require "function.php";

$id = $_GET["id"];

$home = query("SELECT * FROM berita WHERE id=$id")[0];

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
<h1>Edit Berita</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<input type='hidden' name='id' value="<?= $home["id"]; ?>">
<input type='hidden' name='beritaLama' value="<?= $home['berita'];?>">
<table>
<tr>
<td><label for='berita'>Gambar :</label></td>
<td><img src="../../img/<?= $home["berita"]; ?>" width="50" height="40"></td>
<td><input type='file' name='berita' id='berita' required/></td>
</tr>
<tr>
<td><label for='judul'>Judul :</label></td>
<td><input type='textarea' name='judul' id='judul' maxlength="75" required value="<?= $home["judul"]; ?>"/></td>
</tr>
<tr>
<td><label for='deskripsi'>Deskripsi :</label></td>
<td><input type='textarea' name='deskripsi' id='deskripsi' maxlength="150" required value="<?= $home["deskripsi"]; ?>"/></td>
</tr>
<tr>
<td><label for='link'>Link :</label></td>
<td><input type='text' name='link' id='link' maxlength="150" required value="<?= $home["link"]; ?>"/></td>
</tr>
</table>
<button type='submit' name='submit'>Save Data</button>
</form>
</body>
</html>