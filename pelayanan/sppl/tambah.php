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
<title>Tambah File Baru</title>
</head>
<body>
<h1>Tambah File SPPL Baru</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<table>
<tr>
<td><label for='sppl'>File :</label></td>
<td><input type='file' name='sppl' id='sppl' required/></td>
</tr>
</table>
<button type='submit' name='submit'>Add Data</button>
</form>
</body>
</html>