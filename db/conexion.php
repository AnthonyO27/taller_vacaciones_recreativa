<?php  
	class conexion{
		public static function getConnection(){
			$conn = new mysqli("localhost","root","","vacaciones_recreativa");
			$conn->query("SET NAMES 'utf8'");
			return $conn;
		}
	}
?>