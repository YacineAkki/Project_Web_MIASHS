<?php
function getBD(){
	$bdd= new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
return $bdd;
}
?>