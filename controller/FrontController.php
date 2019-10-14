<?php
class FrontController extends ControladorBase{
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
        $this->view("index", []);
    }
	
    public function nosotros(){
        $this->view("nosotros", []);
    }
	
    public function alcance(){
        $this->view("alcance", []);
    }
	
    public function contactenos(){
        $this->view("contactenos", []);
    }
	
    public function login(){
        $this->view("login", []);
    }
    

}
?>
