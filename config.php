<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bd   = "estoque";
	
	$con  = mysql_connect($host,$user,$pass);
	
	mysql_select_db($bd,$con);

?>
