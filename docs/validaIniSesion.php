<?php session_start();
	require_once "./php/Conexion.php";
	$url = "EditUsr.html";

	if($_POST)
	{
		$con = new Conexion();
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];
		$query = "select * from users where usr='".$usr."' and pass ='".$pass."';";
		$res = $con->querySQL($query);

		if(count($res) > 0)
		{
			$_SESSION['idUs'] = $res[1][0];
			$_SESSION['nomUs'] = $usr;
			header ("Location: $url");
		}
		else
			header("Location:".$_SERVER['HTTP_REFERER']); 
	}
?>