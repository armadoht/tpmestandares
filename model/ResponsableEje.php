<?php
class ResponsableEje extends EntidadBase{
    private $idResponsableEje;
    private $nombre;
    private $estatus;

    public function ResponsableEje() {
        $table = "responsableeje";
        parent ::EntidadBase($table);
    }

    /*Insertar Pilar*/
    public function insert() {
        $query = "INSERT INTO `responsableeje` (`idResponsableEje`, `nombre`, `estatus`) VALUES (NULL, '$this->nombre', '1')";
        $save = $this->db()->query($query);
        return $save;
    }
    
    function getidResponsableEje() {
        return $this->idResponsableEje;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setResponsableEje($idResponsableEje) {
        $this->idResponsableEje = $idResponsableEje;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
}
?>