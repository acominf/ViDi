<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="./Estilos/estiloRepVideo.css">
    <script src="efectosBarra.js"></script>
    <title>Video</title>
</head>
<body>
    <div class="contenedor">
        
         <?php include('barra.php'); ?>
        <video src="./Videos/v1.mp4" class="repV" controls></video>

        <form action="">
            <div id="cajacom">
                <textarea type="text" name="coment" id="comentario" placeholder="Comentario"></textarea>
            </div>
        </form>
        

    </div>
</body>
</html>