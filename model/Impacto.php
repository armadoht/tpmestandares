<?php
class Impacto extends EntidadBase{
    private $idImpacto;
    private $nombre;
    private $estatus;

    public function Impacto() {
        $table = "impacto";
        parent ::EntidadBase($table);
    }

    /*Insertar Pilar*/
    public function insert() {
        $query = "INSERT INTO `impacto` (`idimpacto`, `nombre`, `estatus`) VALUES (NULL, '$this->nombre', '1')";
        $save = $this->db()->query($query);
        return $save;
    }
    
    function getidImpacto() {
        return $this->idImpacto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setIdPilar($idPilar) {
        $this->idPilar = $idPilar;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
}
?>