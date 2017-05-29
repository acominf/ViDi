<?php 
	require_once 'Conexion.php';

	class Video{
		private $id = "";
		private $url = "";
		private $nombre = "";

		//Si regresa 0 es que no existe el video
		function getID() { return $id; } 

		function __construct($id)
		{
			//Busca en la base
			$c = new Conexion();
			$res = $c->querySQL('Select * from Video  where id = '.$id);
			if(count($res)==2)
			{
				$this->id = $res[0][0];
				$this->nombre = $res[0][1];
				$this->url = $res[0][2];
			}
			else
				$this->id = 0;
		}

		function showMin()
		{
			echo '<div class="Evideo">';
			
			if($this->id != 0)
			{
				echo '<video width="90%" height="90%" controls>';
				echo '<source src="$this->url" type="video/mp4">';
				echo '</video>';
			}
			else
			{
				//echo '<source src="./Videos/v1.mp4" type="video/mp4">';
				echo '<img src="Imagenes/play.png" alt="play" class="playimg">';
			}
			echo '</div>';
		}
	}
?>