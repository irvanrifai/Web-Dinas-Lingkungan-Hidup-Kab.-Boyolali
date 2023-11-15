<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
<title>Mengakses data session</title>
</head>
<body>
<?php
$_SESSION['counter']++;
$_SESSION['nama_pengunjung'] = "Adul";
echo "Selamat Datang ".$_SESSION['nama_pengunjung']."<br>";
echo "Anda telah mengunjungi halaman ini sebanyak".$_SESSION['counter']." kali.";
?>
</body>
</html>