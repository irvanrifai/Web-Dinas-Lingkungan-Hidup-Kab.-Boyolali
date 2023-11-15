<?php

require "function.php";

$id = $_GET["id"];

$home = query("SELECT * FROM berita_lain WHERE id=$id")[0];

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
<h1>Edit Konten Lain</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<input type='hidden' name='id' value="<?= $home["id"]; ?>">
<table>
<tr>
<td><label for='judul'>Judul :</label></td>
<td><input type='textarea' name='judul' id='judul' maxlength="75" required value="<?= $home["judul"]; ?>"/></td>
</tr>
<tr>
<td><label for='link'>Link :</label></td>
<td><input type='textarea' name='link' id='link' maxlength="150" required value="<?= $home["link"]; ?>"/></td>
</tr>
</table>
<button type='submit' name='submit'>Save Data</button>
</form>
</body>
</html>