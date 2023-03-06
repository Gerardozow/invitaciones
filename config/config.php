<?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
	$hostname="localhost";
	$username="udsac";
	$password="zcasar!!_";
	$dbname="uacsdar";
	
	mysqli_connect($hostname,$username, $password) o die ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);

?>