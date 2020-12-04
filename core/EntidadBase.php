<?php
/**ENTIDAD BASE */
class EntidadBase {

    private $table;
    private $db;
    private $conectar;

    //Constructor EntidadBase
    public function EntidadBase($table) {
        $this->table = (string) $table;
        require_once('Conectar.php');
        $this->conectar = new Conectar();
        $this->db = $this->conectar->conexion();
    }

//Constructor
    public function getConectar() {
        return $this->conectar;
    }

//getConectar
    public function db() {
        return $this->db;
    }

//db
    public function getAll() {
        $srt = "SELECT * FROM $this->table";
        if ($this->db) { //Validamos la conexion
            $query = $this->db->query($srt);
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_array()) {
                    $resultSet[] = $row;
                }
            } else {
                $resultSet = null;
            }
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }

//getAll...

    public function getById($id) {
        $srt = "";
        if ($this->db) { //Validamos la conexion
            $query = $this->db->query($srt);
            if ($query->num_rows > 0) {
                $resultSet = $query->fetch_object();
            } else {
                $resultSet = null;
            }
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }

//getById...

    public function getBy($column, $value) {
        $srt = "SELECT * FROM $this->table WHERE $column='$value'";
        if ($this->db) { //Validamos la conexion
            $query = $this->db->query($srt);
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_object()) {
                    $resultSet[] = $row;
                }
            } else {
                $resultSet = null;
            }
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }

//getBy...

    public function deleteById($string) {
        if ($this->db) { //Validamos la conexion
            $resultSet = $query = $this->db->query($string);
            return $resultSet;
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }
    
    public function  updateById($string){
        if ($this->db) { //Validamos la conexion
            $resultSet = $query = $this->db->query($string);
            return $resultSet;
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }

//deleteById...
    public function deleteBy($column, $value) {
        $srt = "DELETE FROM $this->table WHERE $column='$value'";
        if ($this->db) { //Validamos la conexion
            $resultSet = $query = $this->db->query($srt);
            return $resultSet;
        } else {
            $resultSet = null;
        }
        return $resultSet;
    }

    public function datosDepartamento() {
        $query = "SELECT * FROM `departamento`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function datosTipo() {
        $query = "SELECT * FROM `tipolup`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function datosProyecto() {
        $query = "SELECT * FROM `proyecto`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
     public function datosPilar() {
        $query = "SELECT * FROM `pilar`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    

    public function datosNomina() {
        $query = "SELECT * FROM `nomina`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function datosPlanta() {
        $query = "SELECT * FROM `planta`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    
    
    public function arrayMaquina() {
        $query = "SELECT * FROM `maquina`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function arrayTipo(){
        $query = "SELECT nombre FROM `tipolup`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function arrayClasificacion(){
        $query = "SELECT * FROM `clasificacion`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    //DATOS DE GRAFICAS SOLO EL NOMBRE....
    public function arrayPilar(){
        $query = "SELECT nombre FROM `pilar`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    public function arrayProyecto(){
        $query = "SELECT nombre FROM `proyecto`";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
    
    ///END DATOS DE GRAFICAS SOLO EL NOMBRE....

}

?>