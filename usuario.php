<?php 

	require_once("includes/conexion.php");
	$user = $_POST['usuario'];
	//Verificar que el nombre de usuario no existe
	$sql = "SELECT * FROM Usuario where nick = '$user'";
	$res = mysql_query($sql, $con) or die("Error verificando el nombre de usuario".mysql_error());

	if(mysql_num_rows($res) > 0){
		$mensaje="Nombre de usuario no disponible";
	}else{
		//Estado 0=inactivo
		//1 = conectado
		//2 = en partida
		$sqlGuardar = "INSERT INTO Usuario VALUES (null,'$user',1)";
		$resG = mysql_query($sqlGuardar,$con) or die("Error guardando usuario".mysql_error());
		$mensaje = "Nombre de usuario correcto, comience a jugar";
	}
 ?>