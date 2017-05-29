<?php 
  session_start();  
  require_once './php/Video.php';
  require_once './php/Usuario.php';
  require_once './php/Conexion.php';
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
                if(isset($_SESSION['idUs']))
                {
                  $usr = new Usuario($_SESSION['idUs']);
                  echo '<a class="link" href="EditUsr.php" id="inicios">'.$usr->getNombre().'</a>';
                }
                else
                  echo '<a class="link" href="IniSesion.php" id="inicios">Iniciar Sesion</a>';
              ?>
          
        </div>
      <main>
        <div class="menu">
        </div>
      </main>
    

    <div class="Tvideos">
      <?php 
        $nVideos = 9;
        $c = new Conexion();
        $i=0;

        $videos = $c->querySQL('Select * from Video');
        for($i =  0; $i<count($videos);$i++)
        {
          echo "entro";
          $v = new Video($videos[$i][0]);
          $v.showMin();
        }

        if(count($videos) < $nVideos)
        {
          for (;$i < $nVideos; $i++) { 
            $v = new Video(0);
            $v->showMin();
          }
        }
      ?>
    </div>
     <footer>

     </footer>
  </div>
  </body>
</html>
