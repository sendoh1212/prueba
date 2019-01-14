<!DOCTYPE html>
<html>
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="css_Agenda/estilos_login.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="botstrap/css/estilos.css">

</head>
<body>
    
    <div class="container" id="login">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h2>Poolbee</h2>
            </div>

            <form action="validar.php" method="post">

            
                <div class="panel-body">
                
                    <pre><h4>Usuario            Contraseña</h4><input type="text" name="Usuario2" placeholder="Usuario" required>      <input type="password" name="Contraseña2" placeholder="Contraseña" required>     <input class="btn btn-Prymary" type="submit" value="Iniciar Sesion"></pre>

                </div>

            </form>

            <div class="form">
                <form action="reg.php" method="post">
                <div class="panel-footer">
                
                    <h2>Crea tu cuenta</h2>
                
                    <input type="text" name="Nombre" placeholder="Nombre" required><br><br>
                    <input type="text" name="Apellido" placeholder="Apellido" required><br><br>
                    <input type="text" name="Correo" placeholder="Correo" required><br><br>
                    <input type="text" name="id_usuario" placeholder="Usuario" required><br><br>
                    <input type="text" name="Contraseña1" placeholder="Contraseña" required><br><br>
                    <label><input type="radio" name="sexo" value="hombre" required> Hombre<br></label>
                    <label><input type="radio" name="sexo" value="mujer" required> Mujer<br></label>
                
                    <h6>Al crear tu cuenta aceptaras nuestros terminos <br>
                         y condiciones
                    </h6>
                    <input class="btn btn-success" type="submit" value="Registrarte">
                </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>