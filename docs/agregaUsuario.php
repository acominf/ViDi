<?php 
	require_once "./php/Conexion.php";
	$url = "IniSesion.php?reg=1";

	if(isset($_POST))
	{
		$con = new Conexion();

		$name = $_POST["name"];
		$lastName = $_POST["lastName"];
		$age = $_POST["age"];
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];

		$query = "insert into users values (null,'$usr','$pass','$name','$lastName','$age')";

		echo $query;

		$res = $con->queryDML($query);

		//if(count($res)==1 && $res[0]!==null)
		if($res == true)
			header ("Location: $url");
		else
			header("Location:".$_SERVER['HTTP_REFERER']); 
	}
?>