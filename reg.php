<?php
	
	//recuperar las variables
	$nombre=$_POST['Nombre'];
	$apellido=$_POST['Apellido'];
    $correo=$_POST['Correo'];
    $id_user=$_POST['id_usuario'];
    $contraseña=$_POST['Contraseña1'];

    $sexo='';
	if($_POST['sexo'] == 'hombre'){
		$sexo = "Hombre"; 
	}
	if($_POST['sexo'] == 'mujer'){
		$sexo = "Mujer"; 
	}

    
	// Abrimos la conexion a la base de datos 
    include("connect_db.php");
     
    mysqli_query($conexion_db,"INSERT INTO info VALUES ('','$nombre','$apellido','$correo','$id_user','$contraseña','$sexo')");  
    
	 
	
    // Cerramos la conexion a la base de datos 
	include("cierra_conexion.php"); 
				
	
	echo " 
    <p>Los datos han sido guardados con exito.</p> 
     
    <p><a href='login.php'>VOLVER ATRÁS</a></p> "
	
?>


