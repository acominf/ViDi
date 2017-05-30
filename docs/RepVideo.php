<?php session_start(); 
    require_once "./php/Usuario.php";
    require_once "./php/Video.php";

    if(isset($_SESSION['idUs'])){
        $usr = new Usuario($_SESSION['idUs']);
         $vid = new Video($_GET['idVid']);
     } else
        header('Location: index.php');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="./Estilos/estiloRepVideo.css">
    <script src="./js/efectosBarra.js"></script>
    <title>Video</title>
</head>
<body>
    <div class="contenedor">
        
         <?php $usr->toBar(); ?>
        <video src='<?php echo $vid->url; ?>' class="repV" controls></video>

        <form action="./php/calificaVideo.php" method="POST">
            <div id="cajacom">
                <h3>Califica este video</h3>
                <input type="number" min="0" max="5" name="cali" placeholder="calificacion"><br>
                <h3>Deja un comentario</h3>
                <textarea type="text" name="coment" id="comentario" placeholder="Comentario"></textarea><br>
                <input type="submit" value="Enviar">
                <input type="hidden" value='<?php echo $vid->id; ?>' name="idvideo">
            </div>
        </form>
        

    </div>
</body>
</html>