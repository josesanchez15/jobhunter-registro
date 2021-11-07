<?php

	//function conectar(){
		$user="root";
		$pass="";
		$server="localhost";
		$db="bdprograv";
		$mysqli= new mysqli($server,$user,$pass,$db);
		
		if($mysqli->connect_errno){
			die ("Error al conectar a la base de datos".mysql_error());
		}else{
			//echo "Conexion exitosa, ";
		}
		
//	}
	
?>
