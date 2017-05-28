<?php session_start();
    if(isset($_SESSION['idUs']) == false)
    {
        header('Location: index.php');
    }
?>        
        <div class="Barra">
            <img src="./Imagenes/us1.jpg" alt="usuario" class="ImgUsuario">

            <div class="NomUs">
                <img src="./Imagenes/iconovidi.svg" alt="incono_name" class="icName">
                <h1 class="nom"><?php echo $_SESSION['nomUs'];?></h1>
            </div>

            <a href="EditUsr.php" class="link">Configuración</a>
            <br>
            <a href="Subirvideos.php" class="link">Subir un Video</a>
            <br>
            <a href="Listas.php" class="link">Mis Listas</a>
            <br>
            <a href="" class="link">Favoritos</a>

        </div>
        
        <div class="push"></div>