<?php

class ConstructionController extends ControladorBase {

    public function ConstructionController() {
        parent::ControladorBase();
    }

    public function index(){
        $this->view("construction",array("title"=>"Captura del Estandar"));
    }

}

?>