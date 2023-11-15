<?php

require "function.php";

if(isset($_POST["submit"]))	{	
	//cek jika data berhasil ditambahkan
	if (tambah($_POST) > 0){
		echo "
		<script>
		alert('data berhasil ditambahkan');
		document.location.href = '../../admin.php';
		</script>
		";
	}
	else{
		echo "
		<script>
		alert('data gagal ditambahkan');
		document.location.href = '../../admin.php';
		</script>
		";
	}
}
?>

<html>
<head>
<title>Tambah Konten</title>
</head>
<body>
<h1>Tambah Konten Baru</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<table>
<tr>
<td><label for='judul'>Judul :</label></td>
<td><input type='textarea' name='judul' id='judul' maxlength="75" required/></td>
</tr>
<tr>
<td><label for='link'>Link :</label></td>
<td><input type='text' name='link' id='link' maxlength="150" required/></td>
</tr>
</table>
<button type='submit' name='submit'>Add Data</button>
</form>
</body>
</html>