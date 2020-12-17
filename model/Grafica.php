<?php
class Grafica extends EntidadBase{
    private $idPlanta;
    private $tabla;
    private $camposTabla;
    private $fechaInicio;
    private $fechaFin;
    private $idDinamico;

    public function Grafica() {
        $table = "grafica";
        parent ::EntidadBase($table);
    }

    public function crearConsulta() {

        $query = "";
        if($this->camposTabla == "*"){
            $query = " SELECT estandar.".$this->idDinamico." FROM `estandar` 
            INNER JOIN ".$this->tabla." ON estandar.".$this->idDinamico." = ".$this->tabla.".".$this->idDinamico." 
            WHERE estandar.idPlanta =".$this->idPlanta." AND (estandar.fechaElaboro BETWEEN '".$this->fechaInicio."' AND '".$this->fechaFin."')";

        }else{
            $query = " SELECT estandar.".$this->idDinamico." FROM `estandar` 
            INNER JOIN ".$this->tabla." ON estandar.".$this->idDinamico." = ".$this->tabla.".".$this->idDinamico." 
            WHERE estandar.idPlanta =".$this->idPlanta." AND estandar.".$this->idDinamico."=".$this->camposTabla." AND (estandar.fechaElaboro BETWEEN '".$this->fechaInicio."' AND '".$this->fechaFin."')";
        }

        $result = $this->db()->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }else{
            return false;
        }

    }

    public function crearIdDinamico(){
        $query = "SHOW COLUMNS FROM ".$this->tabla." FROM grupak_hgo";
        $result = $this->db()->query($query);

        $cont=0;
        $array_campos = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $array_campos[] = $row[0];
            }
            return $array_campos;
        }//Que pasa si no rengo datos???
    }

    public function leyoutGrafica(){
        $query ="SELECT * FROM `$this->tabla`";
        $result = $this->db()->query($query);

        $conRows = $result->num_rows;

        if ($conRows > 0) {
            $campo = array();
            $resultSet = array();

            while ($row = $result->fetch_array()) {
                if($this->camposTabla == $row[0] ){
                    $campo[] = $row;
                } else {
                    $resultSet[] = $row;
                }  
            }
            $cont = count($resultSet);
            

            if($cont == $conRows){
                return $resultSet;
            }else{
                return $campo;
            }
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

    /**Planta */
    function setIdPlanta($idPlanta) {
        $this->idPlanta = $idPlanta;
    }

    function getIdPlanta() {
        return $this->idPlanta;
    }
    /**Tabla */
    function setTabla($tabla) {
        $this->tabla = $tabla;
    }

    function getTabla() {
        return $this->tabla;
    }
    /**campos */
    function setCamposTabla($camposTabla) {
        $this->camposTabla = $camposTabla;
    }

    function getCamposTabla() {
        return $this->camposTabla;
    }
    /**fechaInicio */
    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    function getFechaInicio() {
        return $this->fechaInicio;
    }
    /**fechaFin */
    function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }

    function getFechaFin() {
        return $this->fechaFin;
    }

    /**ID DINAMICO */
    function setIdDinamico($idDinamico) {
        $this->idDinamico = $idDinamico;
    }

    function getIdDinamico() {
        return $this->idDinamico;
    }


}
?>