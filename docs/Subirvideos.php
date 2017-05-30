<?php session_start();
    require_once './php/Usuario.php';
    if(isset($_SESSION['idUs']))
        $usr = new Usuario($_SESSION['idUs']);
    else
        header('Location: index.html');
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
    <script src="./js/efectosBarra.js"></script>
    <title>Subir Video</title>
</head>
<body>
    <div class="contenedor">
        
        <?php $usr->toBar(); ?>
        <script>    
            function addVid(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onloadend = function(e) {
                        var result=e.target.result;
                        $('#vid').attr("src",result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <div class="ContDatos">
            <div class="centraDatv">
            <form method="post" action="./php/UploadVideo.php" enctype="multipart/form-data" >
                Nombre del Video:<br>   
                <input type="text" name="novid" placeholder="Nombre del Video"><br>
                <input type="file" name="fileVi" accept="video/*" id="fileVi"><br>
                <input type="submit" value="Subir archivo" class="boton"/>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
