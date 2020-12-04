<?php
class TipoEstandar extends EntidadBase{
    private $idTipoEstandar;
    private $nombre;
    private $codigo;
    private $estatus;

    public function TipoEstandar() {
        $table = "tipoEstandar";
        parent ::EntidadBase($table);
    }

    /*Insertar Pilar*/
    public function insert() {
        $query = "INSERT INTO `tipoEstandar` (`idTipoEstandar`, `nombre`, `codigo`, `estatus`) VALUES (NULL, '$this->nombre','$this->codigo', '1')";
        $save = $this->db()->query($query);
        return $save;
    }
    
    function getidImpacto() {
        return $this->idImpacto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setIdTipoEstandar($idTipoEstandar) {
        $this->idTipoEstandar = $idTipoEstandar;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
}
?>