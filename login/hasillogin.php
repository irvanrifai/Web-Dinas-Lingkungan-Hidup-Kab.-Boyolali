<?php
session_start();
mysqli_connect('localhost','root','','dlh_boyolali');
echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<br>
Silahkan Logout Klik <a href='logout.php'> Disini </a>