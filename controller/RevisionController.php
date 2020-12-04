<?php

class RevisionController extends ControladorBase {

    public function RevisionController() {
        parent::ControladorBase();
    }

    public function index(){
        $Revision = new Revision();
        $array = $Revision->getAll();
        $this->view("revision", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function crearRevision(){
        $Revision = new Revision();
         if ($_POST['revision'] == '') {
             $this->redirect("revision", "error");
         } else {
            $Revision ->setNombre($_POST['revision']);
            $Revision ->insert();
             $this->redirect("revision", "index");
         }
    }

    public function error() {
        #Cargar vista Tipo Estandar
        $Revision = new Revision();
        $array = $Revision->getAll();
        $this->view("revision", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function updateRevision(){
         $string = "UPDATE `revision` SET `estatus` = '".$_GET['valor']."' WHERE `revision`.`idRevision` = ".$_GET['idRevision']."";
         $Revision = new Revision();
         $Revision->updateById($string);
         $this->redirect("revision", "index");
        
    }


   
}

?>