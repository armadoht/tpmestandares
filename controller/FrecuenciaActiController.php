<?php

class FrecuenciaActiController extends ControladorBase {

    public function FrecuenciaActiController() {
        parent::ControladorBase();
    }

    public function index(){
        #Cargar vista Tipo Estandar
        $FrecuenciaActi = new FrecuenciaActi();
        $array = $FrecuenciaActi->getAll();
        $this->view("frecuenciaActi", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function crearFrecuenciaActi(){
        $FrecuenciaActi = new FrecuenciaActi();
         if ($_POST['frecuenciaActi'] == '') {
             $this->redirect("frecuenciaActi", "error");
         } else {
            $FrecuenciaActi ->setNombre($_POST['frecuenciaActi']);
            $FrecuenciaActi ->insert();
             $this->redirect("frecuenciaActi", "index");
         }
    }

    public function error() {
        #Cargar vista Tipo Estandar
        $FrecuenciaActi = new FrecuenciaActi();
        $array = $FrecuenciaActi->getAll();
        $this->view("frecuenciaActi", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function updateFrecuenciaActi(){
        $string = "UPDATE `frecuenciaacti` SET `estatus` = '".$_GET['valor']."' WHERE `frecuenciaacti`.`idFrecuenciaActi` = ".$_GET['idFrecuenciaActi']."";
         $FrecuenciaActi = new Revision();
         $FrecuenciaActi->updateById($string);
         $this->redirect("frecuenciaActi", "index");
    }


   
}

?>