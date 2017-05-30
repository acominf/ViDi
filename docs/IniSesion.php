<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="Estilos/estiloRegInicio.css">
    <link rel="stylesheet" href="Estilos/estilosGeneral.css">
    <title>Inicio de Sesion</title>
</head>
<body>
    <div class="ContDatos">
        <a href="index.php"><img src="Imagenes/iconovidi.svg" alt="inicio" width="100%" height="200px"></a>
        <div class="datosusuario">

            <?php 
                if(isset($_GET['reg']))
                {
                    echo '<h2>Registro exitoso</h2>';
                }
            ?>
            <form action="./php/validaIniSesion.php" method="post">
                <div>
                    <h3>Nombre de Usuario:</h3>
                    <input type="text" name="usr" placeholder="Usuario">
                </div>

                <div>
                    <h3>Contraseña:</h3>
                    <input type="password" name="pass" placeholder="Contraseña">
                </div>
                
                <input class="boton" type="submit" value="Iniciar">  
            </form>

            <a href="registro.html" class="link">Regístrate</a>
        </div>
    </div>
</body>
</html>