<?php session_start();
	require_once "./Conexion.php";
	$url = "../EditUsr.php";

	if($_POST)
	{
		$con = new Conexion();
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];
		$query = "select * from users where usr='$usr' and pass ='$pass'";
		$res = $con->querySQL($query);

		//echo count($res);

		if(count($res) > 0)
		{
			$_SESSION['idUs'] = $res[1][0];
			//echo '<h1>'. $_SESSION['idUs'].'</h1>';
			header ("Location: $url");
		}
		else
			header("Location:".$_SERVER['HTTP_REFERER']); 
	}
?>