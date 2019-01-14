<?php
    

    $id_user=$_POST['Usuario2'];
    $contraseña = $_POST['Contraseña2'];
    
    include("connect_db.php");


    $sql2=mysqli_query($conexion_db,"SELECT * FROM info WHERE Usuario='$id_user'");
	if($f = mysqli_fetch_assoc($sql2)) {
        if($contraseña==$f['Contraseña']) {
            $_SESSION['id']=$f['id'];
			$_SESSION['Nombre']=$f['Nombre'];
			$_SESSION['Apellido']=$f['Apellido'];
			$_SESSION['Correo']=$f['Correo'];
			$_SESSION['Usuario']=$f['Usuario'];
            $_SESSION['Contraseña']=$f['Contraseña'];
            $_SESSION['Sexo']=$f['Sexo'];

			header("Location: agenda.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='login.php'</script>";	

	}
    
	

?>