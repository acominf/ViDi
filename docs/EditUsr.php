<?php 
    session_start(); 
    require_once "./php/Usuario.php";

    if(isset($_SESSION['idUs']))
        $usr = new Usuario($_SESSION['idUs']);
    else
        header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="Estilos/estilosEditUsr.css">
    <script src="./js/efectosBarra.js"></script>
    <title>Editar datos</title>
</head>
<body>
    <script>
        $(document).ready(function(){
            $('#edit1').click(function(){
                $('.activeUs').removeAttr('disabled')
            })
            $('#edit2').click(function(){
                $('#fileImg').removeAttr('disabled')
            })
            $('#edit3').click(function(){
                $('.activeD').removeAttr('disabled')
            })
            $('#edit4').click(function(){
                $('.activeC').removeAttr('disabled')
            })
        })
    </script>

    <script>    
        function addImage(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onloadend = function(e) {
                    var result=e.target.result;
                    $('#imge').attr("src",result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <div class="contenedor">

    <?php $usr->toBar(); ?>

        <div class="ContDatos">

            <form method="post" action="./php/updateUsuario.php" enctype="multipart/form-data">
                <div class="datosusuario">
                    <div class="ed">
                        <div id="edit1"><!--<img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit1"><p>Editar</p></div>-->
                        <h3>Nombre de usuario</h3>
                        <input type="text" name="usrEdit" value=<?php echo  '"'.$usr->getUsr().'"';?> disabled="disabled" class="activeUs"> 
                    </div> 
                    <div id="edi">
                        <div id="edit2"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit2"><p>Editar</p></div>
                        <img src="<?php echo $usr->getImage();?>" id="imge" width="100px" height="100px" alt=""><br>
                        <input name="file-input" value="Subir" type="file" accept="image/*" onchange="addImage(this)" disabled="disabled" id="fileImg">
                    </div>
                    
                    <div class="ed">
                        <div id="edit3"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit3"><p>Editar</p></div>
                        <h3>Datos Personales</h3>   
                        <input type="text" name="nomEdit" value=<?php echo '"'.$usr->getNombre().'"';?> disabled="disabled" class="activeD">
                        <input type="text" name="ApEdit" value=<?php echo '"'.$usr->getApellido().'"';?> disabled="disabled" class="activeD">
                        <input type="number" name="edadEdit" value="<?php echo $usr->getEdad();?>" min="0" max="125" disabled="disabled" class="activeD">
                    </div>
                    <!--
                    <div class="ed">
                        <div id="edit4"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit4"><p>Editar</p></div>
                        <h3>Contraseña</h3>
                        <input type="password" name="pass" value="contraseña" disabled="disabled" class="activeC">
                    </div>
                    -->
                    <input type="submit" value="Guardar" id="guardar" class="boton"> 
                </div>
            </form>

        </div>
</body>
</html>