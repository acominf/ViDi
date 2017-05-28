<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="./Estilos/estilosGeneral.css">
    <link rel="stylesheet" href="Estilos/estilosEditUsr.css">
    <script src="efectosBarra.js"></script>
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

    <?php include('barra.php'); ?>

        <div class="ContDatos">

            <form action="">

                <div class="datosusuario">
                    <div class="ed">
                        <div id="edit1"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit1"><p>Editar</p></div>
                        <h3>Nombre de usuario</h3>
                        <input type="text" name="usrEdit" value="username" disabled="disabled" class="activeUs"> 
                    </div> 
                    <div id="edi">
                        <div id="edit2"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit2"><p>Editar</p></div>
                        <img src="./Imagenes/us1.jpg" id="imge" width="100px" height="100px" alt=""><br>
                        <input name="file-input" value="Subir" type="file" accept="image/*" onchange="addImage(this)" disabled="disabled" id="fileImg">
                    </div>
                    
                    <div class="ed">
                        <div id="edit3"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit3"><p>Editar</p></div>
                        <h3>Datos Personales</h3>   
                        <input type="text" name="nomEdit" value="Nombre" disabled="disabled" class="activeD">
                        <input type="text" name="ApEdit" value="Apellido" disabled="disabled" class="activeD">
                        <input type="number" name="edadEdit" value="22" min="0" max="125" disabled="disabled" class="activeD">
                    </div>
                    <div class="ed">
                        <div id="edit4"><img src="./Imagenes/edit-pen.png" alt="Editar" id="editimg" class="edit4"><p>Editar</p></div>
                        <h3>Contraseña</h3>
                        <input type="password" name="pass" value="contraseña" disabled="disabled" class="activeC">
                    </div>
                    <input type="submit" value="Guardar" id="guardar" class="boton"> 
                </div>
            </form>

        </div>
</body>
</html>