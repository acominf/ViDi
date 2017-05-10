<?php 
	require_once "./php/Conexion.php";
	$url = "index.html";

	if($_POST)
	{
		$con = new Conexion();
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];
		$query = "select * from usuarios where usr=".$usr." and pass =".$pass.";";
		$res = $con->querySQL($query);

		if(count($res)==1)
			echo "inicio correcto";
		else
			echo "error de usurio o contraseña";
	}

	//header ("Location: $url");
?>