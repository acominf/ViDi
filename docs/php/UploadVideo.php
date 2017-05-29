<?php

    session_start();
    if(isset($_SESSION['idUs'])== false)
        header("Location: index.html");

    require_once "./Conexion.php";

    if (is_uploaded_file($_FILES['fileVi']['tmp_name']))
    {
        $conexion = new Conexion();
        $nombreVid = $_POST['novid'];

        $nombreDirectorio = "../videos";
        $nombreFichero = $_FILES['file']['name'];
        $nombreCompleto = $nombreDirectorio . $nombreFichero;

        if (is_file($nombreCompleto))
        {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;

            move_uploaded_file($_FILES['file']['tmp_name'], $nombreDirectorio.$nombreFichero);

            $query = "insert into video values(null,'".$nombreVid."','".$nombreCompleto."',0)";

            $conexion->queryDML($query);
        }
        else
            print ("No se ha podido subir el fichero");
    }
    else
    {
        print ("No se ha podido subir el fichero");
    }
?>