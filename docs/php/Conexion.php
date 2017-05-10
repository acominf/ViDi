<<?php 
	class Conexion
	{
		function __construct()
		{
			$host = "localhost";
			$user = "root";
			$pass = "";
			$database = "ViDi";

			$this->con = mysql_connect($host,$user,$pass,$database);
			//$this->con = mysqli_connect($host,$user,$pass,$database);
		}

		function __destruct()
		{
			$this->con->close();
		}

		function queryDML($query)
		{
			$result = mysql_query ($query,$this->con);
			//$result = mysqli_query ($query,$this->con);

			if($result)
				return TRUE;
			else
				return FALSE;
		}

		function querySQL($query)
		{
			$resultado = mysql_query ($query,$this->con);
			//$resultado = mysqli_query ($query,$this->con);
			$tabla = [];
			$fila ="";

			while (mysql_fetch_assoc($resultado, $fila)) {
				array_push($tabla, $fila);
			}

			$resultado->close();
			return $tabla;
		}
	}
 ?>