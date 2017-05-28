<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="Imagenes/iconovidi.png" />
    <link rel="stylesheet" href="Estilos/estilosGeneral.css">
    <title>ViDi</title>
    <link rel="stylesheet" href="Estilos/estilosprincipal.css">
    
  </head>
  <body>
 

    <div class="contenedor">
     
        <div class="encabezado">
          
              <div id="logo"> <img src="Imagenes/logovidi1.svg" alt="logo" width="100%" height="100%"></div>
              
              <?php
              if(isset($_SESSION['idUs']) && isset($_SESSION['nomUs']))
                echo '<a class="link" href="EditUsr.html" id="inicios">'.$_SESSION['nomUs'].'</a>';
              else
                echo '<a class="link" href="IniSesion.php" id="inicios">Iniciar Sesion</a>';
              ?>
              
          
        </div>
      
      <main>
        <div class="menu">
        </div>
      </main>
    

    <div class="Tvideos">
        <div class="Evideo"> 
                <video width="90%" height="90%" controls>
                    <source src="./Videos/v1.mp4" type="video/mp4">
                </video>
                
        </div>
        <div class="Evideo">
          <img src="Imagenes/play.png" alt="play" class="playimg">
        </div>
        <div class="Evideo">
          <img src="Imagenes/play.png" alt="play" class="playimg">
        </div>
        <div class="Evideo">
          <img src="Imagenes/play.png" alt="play" class="playimg">
        </div>
        <div class="Evideo">
          <img src="Imagenes/play.png" alt="play" class="playimg">
        </div>
        <div class="Evideo">
          <img src="Imagenes/play.png" alt="play" class="playimg">
        </div>
        
    </div>
     <footer>

     </footer>
  </div>

  </body>
</html>