<?php session_start();
    require_once "Usuario.php";
    
    if(isset($_SESSION['idUs']))
        $usr = new Usuario($_SESSION['idUs']);
    else
        $usr = new Usuario(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="Estilos/estiloSubvideo.css">
    <script src="efectosBarra.js"></script>
    <title>Detecion de un Error</title>
</head>
<body>
    <div class="contenedor">
        
        <?php $usr->toBar(); ?>

        
            <div class="ContDatos">
                <div class="centraDatv">
                    <h2>
                        <?php 
                            switch($_GET['r']){
                                case 1: echo 'Error 1: No se Inserto el archivo';
                                break;
                                case 2: echo 'Error 2: Error al modificar Datos';
                                break;
                            }
                        ?>
                    </h2>
                    <a href="index.html" class="link">Inicio</a>
                </div>
            </div>
        
    </div>
</body>
</html>