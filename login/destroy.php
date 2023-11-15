<?php
session_start();
$id_session = session_id();
echo "Session id Anda adalah ".$id_session;
echo "<br><br>";
session_destroy();
$id_session2 = session_id();
echo "Session ID Anda setelah data session di-destroy :".$id_session2;
?>