<?php
class EmpleadosModel extends ModeloBase{
    private $table;    
    public function __construct($adapter){
        $this->table = "fm_empleados";
        parent::__construct($this->table, $adapter);
    }
    
    //Metodos de consulta
}
?>
