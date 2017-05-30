<?php 
	session_start();
	require_once "Conexion.php";
    if(isset($_SESSION['idUs'])== false)
        header("Location: index.php");

    require_once "Usuario.php";
echo "q pasa";
    if($_POST)
    {
    	$c = new Conexion();
    	var_dump($_POST);

    	//imagen
		echo "q pasa";
    	if(isset($_POST['file-input']) && $_POST['file-input']!=""&& is_uploaded_file($_FILES['file-input']['tmp_name']))
    	{
    		$nombreDirectorio = "../imagenes/";
    		$nombreDirectorioBD = "./imagenes/";
    		var_dump($_FILES);

    		move_uploaded_file($_FILES['file-input']['tmp_name'], $nombreDirectorio.$_SESSION['idUs']);

    		$urlIma = $nombreDirectorioBD.$_SESSION['idUs'];

    		$query = "UPDATE users SET imaUrl=".$urlIma." WHERE id = ".$_SESSION['idUs'];	
    		var_dump($query);

    		$c->queryDML($query);
    	}

		//nombre
		if(isset($_POST["nomEdit"]) && $_POST["nomEdit"]!="")
    	{
    		$query = "UPDATE `users` SET `nombre`='".$_POST["nomEdit"]."' WHERE id = ".$_SESSION['idUs'];

    		$c->queryDML($query);
    	}

    	if(isset($_POST["ApEdit"]) && $_POST["ApEdit"]!="")
    	{
    		$query = "UPDATE `users` SET `apellido`=".$_POST["ApEdit"]." WHERE id = ".$_SESSION['idUs'];

    		$c->queryDML($query);
    	}

    	if(isset($_POST["edadEdit"]) && $_POST["edadEdit"]!="")
    	{
    		$query = "UPDATE `users` SET `edad`=".$_POST["edadEdit"]." WHERE id = ".$_SESSION['idUs'];

    		$c->queryDML($query);
    	}

    	header("Location: ../EditUsr.php");
    }
?>