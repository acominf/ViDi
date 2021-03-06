<?php 
	require_once 'Conexion.php';

	class Video{
		private $id = "";
		private $url = "";
		private $nombre = "";

		//Si regresa 0 es que no existe el video
		function getID() { return $this->id; } 
		function getUrl() { return $this->url;}
		function getNombre() {return $this->nombre;}

		function __construct($id)
		{
			//Busca en la base
			$c = new Conexion();
			$res = $c->querySQL('Select * from video  where id = '.$id);
			if(count($res)==2)
			{
				$this->id = $res[1][0];
				$this->nombre = $res[1][1];
				$this->url = $res[1][2];
			}
			else
				$this->id = 0;
		}

		function showMin()
		{
			echo '<div class="Evideo">';
			
			if($this->id != 0)
			{
				echo '<a href="./RepVideo.php?idVid='.$this->id.'">';
				echo '<video width="90%" height="90%" controls>';
				echo '<source src="'.$this->url.'" type="video/mp4">';
				echo '</video>';
				echo '</a>';
			}
			else
			{
				//echo '<source src="./Videos/v1.mp4" type="video/mp4">';
				echo '<img src="Imagenes/play.png" alt="play" class="playimg">';
			}
			echo '</div>';
		}
		function califica($idUser,$cal){
			$c = new Conexion();
			$res = $c->querySQL('select * from user_video');

			if(count($res)<1)
			{
				//insert
				$c->queryDML('insert into user_video values('.$this->id.','.$idUser.','.$cal.');');
			}
			else
			{
				//update
				$c->queryDML('update user_video set puntuacion='.$cal.'  where id = '.$id.' and idUser='.$idUser);
			}
		}
	}
?>