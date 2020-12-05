<?php

class TipoEstandarController extends ControladorBase {

    public function TipoEstandarController() {
        parent::ControladorBase();
    }

    public function index(){
        #Cargar Vista de Tipo de Estandar
        $TipoEstandar = new TipoEstandar();
        $datos = $TipoEstandar->getAll();
        $this->view("tipoEstandar", array(
            "datos" => $datos,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function crearTipoEstandar(){
         $TipoEstandar = new TipoEstandar();
         if ($_POST['tipoEstandar'] == '') {
             $this->redirect("tipoEstandar", "error");
         } else {
            $TipoEstandar ->setNombre($_POST['tipoEstandar']);
            $TipoEstandar ->setCodigo($_POST['codigoEstandar']);
            $TipoEstandar ->insert();
             $this->redirect("tipoEstandar", "index");
         }
    }

    public function error() {
        #Cargar vista Tipo Estandar
        $TipoEstandar = new TipoEstandar();
        $array = $impacto->getAll();
        $this->view("tipoEstandar", array(
            "data" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function updateTipoEstandar(){
         $string = "UPDATE `tipoestandar` SET `estatus` = '".$_GET['valor']."' WHERE `tipoestandar`.`idTipoEstandar` = ".$_GET['idTipoEstandar']."";
         $TipoEstandar = new TipoEstandar();
         $TipoEstandar->updateById($string);
         $this->redirect("tipoEstandar", "index");
    }


   
}

?>