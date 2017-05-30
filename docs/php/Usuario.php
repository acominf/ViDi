<?php 
	require_once 'Conexion.php';
	class usuario
	{
		private $id = 0;
      private $usr = "";
      private $pass = "";
      private $nombre ="";
      private $apellido ="";
      private $edad = "";
      private $url = "";

		function __construct($_id) 
		{
         $c = new Conexion();

         $dt = $c->querySQL('select * from users where id = '.$_id);
         if(count($dt)==2)
         {
            $this->id = $dt[1][0];
            $this->usr = $dt[1][1];
            $this->pass = $dt[1][2];
            $this->nombre = $dt[1][3];
            $this->apellido = $dt[1][4];
            $this->edad = $dt[1][5];
            $this->url = $dt[1][6];
         }
         else
            $this->id = 0;
		}

      //Datos para presentar la barra
		function toBar()
		{
                  if($this->id!=0)
                  {
                        echo '<div class="Barra">';
                        echo '<img src="'.$this->url.'" alt="usuario" class="ImgUsuario">';
                        echo '<div class="NomUs">';
                        echo '<img src="./Imagenes/iconovidi.svg" alt="incono_name" class="icName">';
                        echo '<h1 class="nom">'.$this->usr.'</h1>';
                        echo '</div>';
                        echo '<a href="EditUsr.php" class="link">Configuración</a><br>';
                        echo '<a href="Subirvideos.php" class="link">Subir un Video</a><br>';
                        echo '<a href="Listas.php" class="link">Mis Listas</a><br>';
                        echo '<a href="" class="link">Favoritos</a><br>';
                        echo '<a href="./php/cerrarSesion.php" class="link">Cerrar Sesion</a>';
                        echo '</div>';
                        echo '<div class="push"></div>';
                 }
		}

		function videos($clasificacion)
		{
			$videos = [];

			return $videos;
		}

      public function getId(){ return $this->id; }
      public function getEdad() { return $this->edad; }
      public function getImage() { return $this->url; }
      public function getNombre() { return $this->nombre; }
	}
?>