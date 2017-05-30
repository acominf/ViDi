<?php

    session_start();
    if(isset($_SESSION['idUs'])== false)
        header("Location: index.html");

    require_once "./Conexion.php";

    if (is_uploaded_file($_FILES['fileVi']['tmp_name']))
    {
        $conexion = new Conexion();
        $nombreVid = $_POST['novid'];

        $nombreDirectorio = "../videos/";
        $nombreDirectorioBD = "./videos/";
        $nombreFichero = $nombreVid.".mp4";
        $nombreCompleto = $nombreDirectorio . $nombreFichero;

        if (!is_file($nombreCompleto))
        {
            move_uploaded_file($_FILES['fileVi']['tmp_name'], $nombreDirectorio.$nombreFichero);

            $query = "insert into video values(null,'".$nombreFichero."','".$nombreDirectorioBD . $nombreFichero."')";

            $conexion->queryDML($query);

            header("Location: Subirvideos.html");
        }
        else
            print ("No se ha podido subir el fichero_2");
    }
    else
    {
        print ("No se ha podido subir el fichero_1");
    }
?>