<?php





// Parametros a configurar para la conexion de la base de datos

$hotsdb = "localhost";    // sera el valor de nuestra BD
$basededatos = "Poolbee";    // sera el valor de nuestra BD

$usuariodb = "root";    // sera el valor de nuestra BD
$clavedb = "";    // sera el valor de nuestra BD


// Fin de los parametros a configurar para la conexion de la base de datos

$conexion_db = new mysqli("$hotsdb","$usuariodb","$clavedb","$basededatos")
	or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
	$conexion_db->set_charset("utf8");
    




			
	
?>