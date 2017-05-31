<?php 
	session_start();
	require_once "Conexion.php";
    if(isset($_SESSION['idUs'])== false)
        header("Location: index.php");

    require_once "Usuario.php";

    var_dump($_FILES);
    if($_POST || is_uploaded_file($_FILES['file-input']['tmp_name']))
    {
    	$c = new Conexion();

    	//imagen
    	if(is_uploaded_file($_FILES['file-input']['tmp_name']))
    	{
            var_dump($_FILES);
    		$nombreDirectorio = "../imagenes/";
    		$nombreDirectorioBD = "./imagenes/";
            $res = explode(".", $_FILES['file-input']['name']);
            $ext = $res[count($res)-1];

    		move_uploaded_file($_FILES['file-input']['tmp_name'], $nombreDirectorio.$_SESSION['idUs'].".".$ext);

            echo $nombreDirectorio.$_SESSION['idUs'].".".$ext;

    		$urlIma = $nombreDirectorioBD.$_SESSION['idUs'];

    		$query = "UPDATE users SET imaUrl='".$urlIma."' WHERE id = ".$_SESSION['idUs'].".".$ext;	
            echo $query;

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