<!DOCTYPE html>


<html>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />

<head>
	<title>Test</title>
	<meta name="generator" content="BBEdit 13.0" />
	<link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
</head>
<body>

<form action="enregistrement.php" method="get" autocomplete="off">

<p>
Nom :
<?php

echo '<input type="text" name="n" value ='. $_GET['var1']."/>";


?>


</p>

<p>
Prénom :
<?php

echo '<input type="text" prenom="p" value ='. $_GET['var2']."/>";


?>
</p>

<p>
Adresse :
<?php

echo '<input type="text" name="adr" value ='. $_GET['var3']."/>";


?>
</p>

<p>
Adresse e-mail :
<?php

echo '<input type="text" name="mail" value ='. $_GET['var4']."/>";


?></p>

<p>