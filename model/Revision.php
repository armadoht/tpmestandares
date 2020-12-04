<?php
class Revision extends EntidadBase{
    private $idRevision;
    private $nombre;
    private $estatus;

    public function Revision() {
        $table = "revision";
        parent ::EntidadBase($table);
    }

    /*Insertar Pilar*/
    public function insert() {
        $query = "INSERT INTO `revision` (`idRevision`, `nombre`, `estatus`) VALUES (NULL, '$this->nombre', '1')";
        $save = $this->db()->query($query);
        return $save;
    }
    
    function getidRevision() {
        return $this->idImpacto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setIdRevision($idRevision) {
        $this->idRevision = $idRevision;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
}
?>