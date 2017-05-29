<?php

class Conexion
{
    private $conexion;
    private $tabla;

    //Crea una conexion con la base de datos ViDi
    function __construct() 
    {
        $server ="localhost";
        $usuario="root";
        $contrasenia="";
        $basedatos="vidi";
        
        $this->conexion = new mysqli($server,$usuario,$contrasenia,$basedatos);

        if($this->conexion->connect_error)
            die($this->conexion->connect_error);
    }

    function __destruct (){ $this->conexion->close(); }

    //Realiza una consulta a la base de datos y regresa un resultado (SQL)
    function querySQL($query)
    {
        $resultado = $this->conexion->query($query);
        $arrayName = array();

        if(!$resultado)
            die($this->conexion->error);
        else
        {
            //$this->tabla[0] = array_keys($resultado->fetch_array(MYSQLI_ASSOC));
            
            for($i=0;$i<$resultado->num_rows;$i++)
            {
                $resultado->data_seek($i);
                $this->tabla[$i+1]= $resultado->fetch_array(MYSQLI_NUM);
            }
        }

        $resultado->close();

        return $this->tabla;
    }

    //Ejecuta un comando en la base de datos. No regresa nada (DML)
    function queryDML($query)
    {
        $resultado = $this->conexion->query($query);
        $this->tabla=null;

        if(!$resultado){
            // die($this->conexion->error);
            header("Location: DespErrores.php?r=2");
        }

        return true;
    }
}
?>