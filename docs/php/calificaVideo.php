<?php session_start(); 
    require_once "./php/Usuario.php";
    require_once "./php/Video.php";
    
    $usr = new Usuario($_SESSION['idUs']);
        if(isset($_POST)){
            $vid = new Video($_POST['idVideo']);// le llegara despues de seleccionar el video que quiere ver 
            $vid.califica($_SESSION['idUs'],$_POST['cali']);
        }
 ?>