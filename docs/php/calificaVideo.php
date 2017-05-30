<?php session_start(); 
    require_once "./Usuario.php";
    require_once "./Video.php";
    
    $usr = new Usuario($_SESSION['idUs']);
        if(isset($_POST)){
            $vid = new Video($_POST['idvideo']);// le llegara despues de seleccionar el video que quiere ver 
            $vid->califica($_SESSION['idUs'],$_POST['cali']);
            header("Location:".$_SERVER['HTTP_REFERER']); 
        }
 ?>