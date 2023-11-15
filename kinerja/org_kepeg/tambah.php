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
<title>Tambah Organisasi, Kepeg, Keu</title>
</head>
<body>
<h1>Tambah Organisasi, Kepeg, Keu Baru</h1>
<form method='POST' action='' enctype='multipart/form-data'>
<table>
<tr>
<td><label for='org_kepeg'>File Baru :</label></td>
<td><input type='file' name='org_kepeg' id='org_kepeg' required/></td>
</tr>
</table>
<button type='submit' name='submit'>Add Data</button>
</form>
</body>
</html>