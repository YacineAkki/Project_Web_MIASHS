<?php
session_start();
session_destroy();
echo"Vous vous ête bien déconnecté";
echo'<META http-equiv="refresh" content="2; URL=../index.php">';
?>