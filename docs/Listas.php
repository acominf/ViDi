<?php session_start();
    require_once './php/Usuario.php';

    if(isset($_SESSION['idUs'])== false)
        header('Location: index.html');
    else
        $user = new Usuario($_SESSION['idUs']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="Estilos/estiloSubvideo.css">
    <script src="./js/efectosBarra.js"></script>
    <title>lista de videos</title>
</head>
<body>
    <div class="contenedor">
        
         <?php $user->toBar(); ?>
        <div class="ContDatos">
            <div class="centraDatv">
             <?php 
                    require_once "./php/Conexion.php";
                    $conexion = new Conexion();
                    $query = "SELECT id, nombre FROM video";
                    $tabla = $conexion->querySQL($query);
                    echo '<h2>Lista de los Videos</h2>';
                    for($i = 1;$i<count($tabla);$i++){
                        echo '<a class="link" href="./RepVideo.php?idVid='.$tabla[$i][0].'">'.$tabla[$i][0].' - '.$tabla[$i][1].'</a><br>';
                    }
                ?>  
            </div> 
        </div>

    </div>
</body>
</html>