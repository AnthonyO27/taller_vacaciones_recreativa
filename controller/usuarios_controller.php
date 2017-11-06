<?php  
	require_once 'model/usuarios_model.php';
	
	class usuarios_controller{

		private $model_u;

		function __construct(){

			$this->model_u = new usuarios_model(); 
		}

		function index(){
			$title = "Admin | Panel de Control";
			$query = $this->model_u->MostrarUsuarios();
			require_once 'views/header.php';
			require_once 'views/index.php';
			require_once 'views/footer.php';
		}

		function ver_usuarios(){
			$title = "Admin | Usuarios Registrados";
			$query = $this->model_u->MostrarUsuarios();
			require_once 'views/header.php';
			require_once 'views/usuarios_registrados.php';
			require_once 'views/footer.php';
		}

		function gestion_usuarios(){
			$title = "Admin | Gestion de usuarios";
			require_once 'views/header.php';
			require_once 'views/gestion_usuarios.php';
			require_once 'views/footer.php';
		}

		function guardar_usuarios(){
			$data['nombreusu']=$_POST['txt_nom_usu'];
			$data['contraseña']=$_POST['txt_pass'];
			$data['nombre']=$_POST['txt_nombres'];
			$data['apellido']=$_POST['txt_apellidos'];
			$data['identificacion']=$_POST['txt_identificacion'];
			$data['telefono']=$_POST['txt_telefono'];
			$data['direccion']=$_POST['txt_dir'];
			$this->model_u->add($data);
			header('Location:index.php?m=ver_usuarios');
		}

		function obtener_usuarios(){
			$id = $_POST['id_text'];
		}
		

	}

?>