<?php

class GraficaController extends ControladorBase {

    public function GraficaController() {
        parent::ControladorBase();
    }

    public function index(){
        $Grafica = new Grafica();
        $planta = $Grafica->datosPlanta();
        $this->view("grafica", array(
            "title" => "Selecciona el tipo de grafica que se necesita desplegar",
            "planta"=>$planta));
    }


    public function crearGrafica(){

        $Grafica = new Grafica();

        $Grafica->setIdPlanta($_POST['idPlanta']);//Planta
        $Grafica->setTabla($_POST['tablas']); //Tabla a consultar
        $Grafica->setCamposTabla($_POST['valorTablas']); //campos de la tabla 1 o muchos
        $Grafica->setFechaInicio($_POST['fecha_inicio']);//Rango de estandares Fecha inicio 
        $Grafica->setFechaFin($_POST['fecha_fin']);//Rango de estandares Fecha Fin
        
        $arrarCamposTabla = $Grafica->crearIdDinamico();
        $id=$arrarCamposTabla[0];
        $Grafica->setIdDinamico($id);

        //Crear una consulta dinamica dea acuerdo a la necesidad de los valores proporcionado por el usuario.
        $datos = $Grafica->crearConsulta();

        $layout = $Grafica->leyoutGrafica(); //Contamos con los campos de la grafica
        $this->view("graficaPrincipal", array("title" => "Grafica Estandares","layout" => $layout,"datos"=>$datos,"idDinamico"=>$id));
    }


}

?>