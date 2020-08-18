<?php
	
	$mysqli = new mysqli('remotemysql.com','BqFO3NU4ph', 'M8GPZ4qMDl', 'BqFO3NU4ph');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>