<?php
class FrecuenciaActi extends EntidadBase{
    private $idFrecuenciaActi;
    private $nombre;
    private $estatus;

    public function FrecuenciaActi() {
        $table = "frecuenciaacti";
        parent ::EntidadBase($table);
    }

    /*Insertar Pilar*/
    public function insert() {
        $query = "INSERT INTO `frecuenciaacti` (`idFrecuenciaActi`, `nombre`, `estatus`) VALUES (NULL, '$this->nombre', '1')";
        $save = $this->db()->query($query);
        return $save;
    }
    
    function getidFrecuenciaActi() {
        return $this->idFrecuenciaActi;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setResponsableEje($idFrecuenciaActi) {
        $this->idFrecuenciaActi = $idFrecuenciaActi;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
}
?>