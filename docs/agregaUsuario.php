<?php 
	require_once "./php/Conexion.php";
	$url = "index.html";

	if($_POST)
	{
		$con = new Conexion();

		$name = $_POST["name"];
		$lastName = $_POST["lastName"];
		$age = $_POST["age"];
		$usr = $_POST["usr"];
		$pass = $_POST["pass"];

		$query = "insert into users values ('$usr','$pass',$name','lastName','$age')";

		echo $query;

		$res = $con->querySQL($query);

		if(count($res)==1 && $res[0]!==null)
			header ("Location: $url");
		else
			header("Location:".$_SERVER['HTTP_REFERER']); 
	}
?>