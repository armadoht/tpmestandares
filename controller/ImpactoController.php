<?php

class ImpactoController extends ControladorBase {

    public function ImpactoController() {
        parent::ControladorBase();
    }

    public function index(){
        #Cargar Vista de ImpactoController
        $impacto = new Impacto();
        $datos = $impacto->getAll();
        $this->view("impacto", array(
            "datos" => $datos,
            "mensajeError" => "<div class='alert alert-success' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function crearImpacto(){
        $impacto = new Impacto();
        if ($_POST['nombreImpacto'] == '') {
            $this->redirect("impacto", "error");
        } else {
            $impacto ->setNombre($_POST['nombreImpacto']);
            $impacto ->insert();
            $this->redirect("impacto", "index");
        }
    }

    public function error() {
        $impacto = new Impacto();
        $datos = $impacto->getAll();
        $this->view("impacto", array(
            "datos" => $datos,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function updateImpacto(){
        $string = "UPDATE `impacto` SET `estatus` = '".$_GET['valor']."' WHERE `impacto`.`idImpacto` = ".$_GET['idImpacto']."";
        $impacto = new Impacto();
        $impacto->updateById($string);
        $this->redirect("impacto", "index");
    }


   
}

?>