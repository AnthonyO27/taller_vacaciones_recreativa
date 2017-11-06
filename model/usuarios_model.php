<?php  
	class usuarios_model{
		private $db;
		private $usuarios;

		function __construct(){
			$this->db = conexion::getConnection();
			$this->usuarios = array();
		}

		function MostrarUsuarios(){
			$query = $this ->db ->query("SELECT * FROM usuarios WHERE tipousuario_id=2");
			while($fila = $query->fetch_assoc()){
				$this->usuarios[] = $fila;
			}
			return $this->usuarios;
		}

		function add($data){

			$sql = "INSERT INTO usuarios (nombreusu,contraseña,nombre,apellido,identificacion,telefono,direccion,tipousuario_id,estado) VALUES".
			"('".$data['nombreusu']."','".$data['contraseña']."','".$data['nombre']."','".$data['apellido']."','".$data['identificacion']."','".$data['telefono']."','".$data['direccion']."','".'2'."','".'1'."')";
			mysqli_query($this->db,$sql) or die (mysqli_error($this->db));
			
		}

	}

?>