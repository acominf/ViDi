<?php session_start();
    if(isset($_SESSION['idUs']== false)
    {
        header("Location: index.html");
    }
    require_once "./Conexion.php";

    if(isset($_POST)== false && sizeof($_FILES)==0){
        header('Location: DespErrores.php?r=1');
    }
    $conexion = new Conexion();
    $nombreVid = $_POST['novid'];
    $nomFile=$_FILES['fileVi']['tmp_name'];
    $tam = $_FILES['fileVi']['size'];
    $tipo = $_FILES['fileVi']['type'];
    $fp = fopen($nomFile,"rb");
    $contenido = fread($fp,$tam);
    $contenido = addslashes($contenido);
    fclose($fp);
    $query = "INSERT INTO video VALUES(null,'$nombreVid','$contenido',$_SESSION['idUs'])";

    $conexion->queryDML($query);
?>