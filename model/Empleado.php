<?php
class Empleado extends EntidadBase{
    private $id;
    private $id_empleado;
    private $nombre;
    private $apellido;
    private $direccion;
    private $telefono;
    private $celular;
    private $correo_electronico;
    
    public function __construct($adapter) {
        $table="fm_empleados";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getIdEmpleado() {
        return $this->id_empleado;
    }

    public function setIdEmpleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getCorreoElectronico() {
        return $this->correo_electronico;
    }

    public function setCorreoElectronico($correo_electronico) {
        $this->correo_electronico = $correo_electronico;
    }

    public function save(){
        $query="INSERT INTO fm_empleados (id,id_empleado,nombre,apellido,direccion,telefono,celular,correo_electronico)
                VALUES(NULL,
                       '".$this->id_empleado."',
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->direccion."',
                       '".$this->telefono."',
                       '".$this->celular."',
                       '".$this->correo_electronico."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>