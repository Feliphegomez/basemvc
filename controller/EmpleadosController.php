<?php
class EmpleadosController extends ControladorBase{
    public $conectar;
	public $adapter;
	public $menu;
	
    public function __construct() {
        parent::__construct();
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
		$this->menu = require_once 'config/menu.php';
    }
    
    public function index(){        
        //Creamos el objeto usuario
        $empleado = new Empleado($this->adapter);        
        //Conseguimos todos los usuarios
        $all_empleados = $empleado->getAll();
		
        //Cargamos la vista index y le pasamos valores
        $this->view("indexEmpleados",array(
            "all_empleados" => $all_empleados,
			// "allproducts" => $allproducts,
            "Hola"    =>"Soy index de Empleados"
        ));
    }
    
    public function crear(){
        if(isset($_POST["nombre"])){
            //Creamos un usuario
            $empleado =new Empleado($this->adapter);
            $empleado->setIdEmpleado($_POST["id_empleado"]);
            $empleado->setNombre($_POST["nombre"]);
            $empleado->setApellido($_POST["apellido"]);
            $empleado->setDireccion($_POST["direccion"]);
            $empleado->setTelefono($_POST["telefono"]);
            $empleado->setCelular($_POST["celular"]);
            $empleado->setCorreoElectronico(($_POST["correo_electronico"]));
            $save = $empleado->save();
        }
        $this->redirect("Empleados", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            $usuario=new Empleado($this->adapter);
            $usuario->deleteById($id); 
        }
        $this->redirect();
    }
    
    
    public function hola(){
        $usuarios=new EmpleadosModel($this->adapter);
        $usu=$usuarios->getUnEmpleado();
        var_dump($usu);
    }

}
?>
