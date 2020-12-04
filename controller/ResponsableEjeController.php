<?php

class ResponsableEjeController extends ControladorBase {

    public function ResponsableEjeController() {
        parent::ControladorBase();
    }

    public function index(){
        $ResponsableEje = new ResponsableEje();
        $array = $ResponsableEje->getAll();
        $this->view("responsableEje", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function crearResponsableEje(){
        $ResponsableEje = new ResponsableEje();
         if ($_POST['responsableEje'] == '') {
             $this->redirect("responsableEje", "error");
         } else {
            $ResponsableEje ->setNombre($_POST['responsableEje']);
            $ResponsableEje ->insert();
             $this->redirect("responsableEje", "index");
         }
    }

    public function error() {
        $ResponsableEje = new ResponsableEje();
        $array = $ResponsableEje->getAll();
        $this->view("ResponsableEje", array(
            "datos" => $array,
            "mensajeError" => "<div class='alert alert-warning' role='alert'>No se pueden guardar campos vacios!</div>"
        ));
    }

    public function updateResponsableEje(){
        $string = "UPDATE `responsableeje` SET `estatus` = '".$_GET['valor']."' WHERE `responsableeje`.`idResponsableEje` = ".$_GET['idResponsableEje']."";
        $ResponsableEje = new ResponsableEje();
        $ResponsableEje->updateById($string);
        $this->redirect("responsableEje", "index");
    }

}

?>