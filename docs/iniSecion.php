<?php 
	require_once "./php/Conexion.php";
	$url = "index.html";

	if($_POST)
	{
		$con = new Conexion();
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];
		$query = "select * from users where usr='".$usr."' and pass ='".$pass."';";
		$res = $con->querySQL($query);

		if(count($res)==1 && $res[0]!==null)
			header ("Location: $url");
		else
			header("Location:".$_SERVER['HTTP_REFERER']); 
	}
?>