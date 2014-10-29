<?php 
	$host="mysql.idhostinger.com";
	$user="u124339049_game4";
	$pass="genesis777";
	$database="u124339049_game4";
	mysql_connect($host,$user,$pass) or die (mysql_error());

	mysql_select_db($database) or die ("Gagal pilih database");
	ini_set( "display_errors", 0);
?>
