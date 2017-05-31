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
        var_dump($_POST);

        //imagen
        if(is_uploaded_file($_FILES['file-input']['tmp_name']))
        {
            var_dump($_FILES);
            $nombreDirectorio = "../imagenes/";
            $nombreDirectorioBD = "./imagenes/";
            $res = explode(".", $_FILES['file-input']['name']);
            $ext = $res[count($res)-1];

            if(is_file($nombreDirectorio.$_SESSION['idUs'].".".$ext))
                unlink($nombreDirectorio.$_SESSION['idUs'].".".$ext);

            move_uploaded_file($_FILES['file-input']['tmp_name'], $nombreDirectorio.$_SESSION['idUs'].".".$ext);

            echo $nombreDirectorio.$_SESSION['idUs'].".".$ext;

            $urlIma = $nombreDirectorioBD.$_SESSION['idUs'].".".$ext;

            $query = "UPDATE users SET imaUrl='".$urlIma."' WHERE id = ".$_SESSION['idUs'];    
            echo $query;

            $c->queryDML($query);
        }

        //nombre
        if(isset($_POST["nomEdit"]) && $_POST["nomEdit"]!="")
        {
            echo "nombre<br>";
            $query = "UPDATE `users` SET `nombre`='".$_POST["nomEdit"]."' WHERE id = ".$_SESSION['idUs'];

            $c->queryDML($query);
        }

        if(isset($_POST["ApEdit"]) && $_POST["ApEdit"]!="")
        {
            echo "apellido<br>";
            $query = "UPDATE `users` SET `apellido`='".$_POST["ApEdit"]."' WHERE id = ".$_SESSION['idUs'];

            $c->queryDML($query);
        }

        if(isset($_POST["edadEdit"]) && $_POST["edadEdit"]!="")
        {
            echo "edad<br>";
            $query = "UPDATE `users` SET `edad`=".$_POST["edadEdit"]." WHERE id = ".$_SESSION['idUs'];

            $c->queryDML($query);
        }

        header("Location: ../EditUsr.php");
    }
?>