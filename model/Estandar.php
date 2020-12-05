<?php
class Estandar extends EntidadBase{
    private $idEstandar;
    private $titulo; 
    private $idRevision;
    private $idResponsableEje;
    private $time;
    private $idFrecuenciaActi;
    private $idPilar;
    private $idTipoEstandar;
    private $idImpacto;
    private $idMaquina;
    private $idMaquinaSeccion;
    private $idProyecto;
    private $idDepartamento;
    private $idPlanta;
    private $noControl;
    private $elaboro;
    private $fechaElaboracion;
    private $revisionUser;
    private $fechaRevision;
    private $aprobo;
    private $fechaAprobo;
    private $estatus;

    public function Estandar() {
        $table = "estandar";
        parent ::EntidadBase($table);
    }

/**Leer estandar */
function getAllInerJoin(){
    $condicion = "estandar.estatus = 1 ORDER BY `estandar`.`idEstandar` ASC";

    $query = "SELECT estandar.idEstandar,estandar.noControl,estandar.titulo,proyecto.nombre,tipoestandar.nombre,departamento.nombre,maquina.nombre,maquinaseccion.nombre,estandar.estatus
            FROM estandar
            INNER JOIN proyecto on estandar.idProyecto = proyecto.idProyecto
            INNER JOIN tipoestandar on  tipoestandar.idTipoEstandar = estandar.idTipoEstandar
            INNER JOIN departamento on estandar.idDepartamento = departamento.idDepartamento
            INNER JOIN maquina on estandar.idMaquina = maquina.idMaquina
            INNER JOIN maquinaseccion on estandar.idMaquinaSeccion = maquinaseccion.idMaquinaSeccion
            INNER JOIN planta on estandar.idPlanta = planta.idPlanta
            WHERE ".$condicion;

    $result = $this->db()->query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
            $resultSet[] = $row;
        }
        return $resultSet;
    }
    return false;
}


/**Insert Estandar*/
    function insert(){
        $fechaHora = date();
        $query = "INSERT INTO `estandar` (`idEstandar`, `titulo`, `idRevision`, `idResponsableeje`, `time`, `idFrecuenciaActi`, `idPilar`, `idTipoEstandar`, `idImpacto`, `idMaquina`, `idMaquinaSeccion`, `idProyecto`, `idDepartamento`, `idPlanta`, `noControl`, `elaboro`, `fechaElaboro`, `revision`, `fechaRevision`, `aprobo`, `fechaAprobo`, `estatus`) "
                . "VALUES (NULL, '$this->titulo', '$this->idRevision', '$this->idResponsableEje', '$this->time', '$this->idFrecuenciaActi', '$this->idPilar', '$this->idTipoEstandar', '$this->idImpacto', '$this->idMaquina', '$this->idMaquinaSeccion', '$this->idProyecto', '$this->idDepartamento', '$this->idPlanta', '$this->noControl', '$this->elaboro', '$this->fechaElaboracion','$this->revisionUser', '$this->fechaRevision','$this->aprobo','$this->fechaAprobo', '1');";
        $save = $this->db()->query($query);
        return $save; 
    }

/**Eliminar Estandar */
    function update($valor){
        $query = "UPDATE `estandar` SET `estatus` = '0' WHERE `estandar`.`idEstandar` = $valor;";
        return $save = $this->db()->query($query);
    }

  
/*Revison Actual*/
    function getRevision(){
        $query = "SELECT * FROM `revision`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Responsable de Ejecucion*/
    function getResponsableEjec(){
        $query = "SELECT * FROM `responsableeje`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Frecuencia de la Actividad*/
    function getFrecuenciaActividad(){
        $query = "SELECT * FROM `frecuenciaacti`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }  

/*Opcion de Pilar*/
    function getPilarArray(){
        $query = "SELECT * FROM `pilar`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }
/*Opcion de Tipo de Estandar*/
    function getTipoEstandar(){
        $query = "SELECT * FROM `tipoestandar`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Opcion de Impacto*/
    function getImpactoArray(){
        $query = "SELECT * FROM `impacto`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Opcion de Proyecto*/
    function getProyectoArray(){
        $query = "SELECT * FROM `proyecto`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Opcion de Clasificación*/
    function getClasificacionArray(){
        $query = "SELECT * FROM `clasificacion`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }


/*Opcion de Departamento*/
    function getDepartamentoArray(){
        $query = "SELECT * FROM `departamento`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Opcion de Maquina*/
    function getMaquinaArray(){
        $query = "SELECT * FROM `maquina`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/*Opcion de Tipo de Lup*/
    function getTipoLup(){
        $query = "SELECT * FROM `tipolup`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }


/*Opcion de Planta*/

    function getPlanta(){
        $query = "SELECT * FROM `planta`";
        $result = $this->db()->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        return false;
    }

/**Set and get idEstandar */
    function getIdEstandar() {
        return $this->idEstandar;
    }
    
    function setIdEstandar($idEstandar) {
        $this->idEstandar = $idEstandar;
    }
/**Set and get Titulo */
    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

/**Set and get idRevision */
    function getIdRevision() {
        return $this->idRevision;
    }

    function setIdRevision($idRevision) {
        $this->idRevision = $idRevision;
    }

/**Set and get idResponsableEje */
    function getIdResponsableEje() {
        return $this->idResponsableEje;
    }

    function setIdResponsableEje($idResponsableEje) {
        $this->idResponsableEje = $idResponsableEje;
    }

/**Set and get time */
    function getTime() {
        return $this->time;
    }

    function setTime($time) {
        $this->time = $time;
    }
/**Set and get NombreDelSetGet */
    function getIdFrecuenciaActi() {
        return $this->idFrecuenciaActi;
    }

    function setIdFrecuenciaActi($idFrecuenciaActi) {
        $this->idFrecuenciaActi = $idFrecuenciaActi;
    }
/**Set and get idPilar */
    function getIdPilar() {
        return $this->idPilar;
    }

    function setIdPilar($idPilar) {
        $this->idPilar = $idPilar;
    }
/**Set and get idTipoEstandar */
    function getIdTipoEstandar() {
        return $this->idTipoEstandar;
    }

    function setIdTipoEstandar($idTipoEstandar) {
        $this->idTipoEstandar = $idTipoEstandar;
    }

/**Set and get idImpacto */
    function getIdImpacto() {
        return $this->idImpacto;
    }

    function setIdImpacto($idImpacto) {
        $this->idImpacto = $idImpacto;
    }

/**Set and get idMaquina */
    function getIdMaquina() {
        return $this->idMaquina;
    }

    function setIdMaquina($idMaquina) {
        $this->idMaquina = $idMaquina;
    }

/**Set and get idMaquinaSeccion */
    function getIdMaquinaSeccion() {
        return $this->idMaquinaSeccion;
    }

    function setIdMaquinaSeccion($idMaquinaSeccion) {
        $this->idMaquinaSeccion = $idMaquinaSeccion;
    }

/**Set and get idProyecto */
    function getIdProyecto() {
        return $this->idProyecto;
    }

    function setIdProyecto($idProyecto) {
        $this->idProyecto = $idProyecto;
    }

/**Set and get idDepartamento */
    function getIdDepartamento() {
        return $this->idDepartamento;
    }

    function setIdDepartamento($idDepartamento) {
        $this->idDepartamento = $idDepartamento;
    }
/**Set and get idPlanta */
    function getIdPlanta() {
        return $this->idPlanta;
    }

    function setIdPlanta($idPlanta) {
        $this->idPlanta = $idPlanta;
    }
/**Set and get noControl */
    function getNoControl() {
        return $this->noControl;
    }

    function setNoControl($noControl) {
        $this->noControl = $noControl;
    }
/**Set and get elaboro */
    function getElaboro() {
        return $this->elaboro;
    }

    function setElaboro($elaboro) {
        $this->elaboro = $elaboro;
    }
/**Set and get fechaElaboracion */
    function getFechaElaboracion() {
        return $this->fechaElaboracion;
    }

    function setFechaElaboracion($fechaElaboracion) {
        $this->fechaElaboracion = $fechaElaboracion;
    }
/**Set and get revision */
    function getRevisionUser() {
        return $this->revisionUser;
    }

    function setRevisionUser($revisionUser) {
        $this->revisionUser = $revisionUser;
    }
/**Set and get fechaRevision */
    function getFechaRevision() {
        return $this->fechaRevision;
    }

    function setFechaRevision($fechaRevision) {
        $this->fechaRevision = $fechaRevision;
    }
/**Set and get aprobo */
    function getAprobo() {
        return $this->aprobo;
    }

    function setAprobo($aprobo) {
        $this->aprobo = $aprobo;
    }
/**Set and get fechaAprobo */
    function getFechaAprobo() {
        return $this->fechaAprobo;
    }

    function setFechaAprobo($fechaAprobo) {
        $this->fechaAprobo = $fechaAprobo;
    }

/**Set and get estatus */
    function getEstatus() {
        return $this->estatus;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

/**Set and get NombreDelSetGet 
    function get() {
        return $this->id;
    }

    function set($id) {
        $this->id = $id;
    }
*/

}/**End Class */
?>
