<?php

class EstandarController extends ControladorBase {

    public function EstandarController() {
        parent::ControladorBase();
    }

    public function index(){
        #Cargar Formulario
        $Estandar = new Estandar();

        $maquinaArr = $Estandar->getMaquinaArray();
        $pilarArr = $Estandar->getPilarArray();
        $proyectoArr = $Estandar->getProyectoArray();
        $departamentoArr = $Estandar->getDepartamentoArray();
        $planta = $Estandar->getPlanta();
        $impacto = $Estandar->getImpactoArray();
        $tipoEstandar = $Estandar->getTipoEstandar();
        $revision = $Estandar->getRevision();
        $responsableEjec = $Estandar->getResponsableEjec();
        $frecuenciaActi = $Estandar->getFrecuenciaActividad();

        $this->view("estandar",
        array("maquina"=> $maquinaArr,
            "pilar" => $pilarArr,
            "proyecto" => $proyectoArr,
            "departamento" => $departamentoArr,
            "planta" => $planta,
            "impacto" => $impacto,
            "tipoEstandar" => $tipoEstandar,
            "revision"=>$revision,
            "responsableEjec"=>$responsableEjec,
            "frecuenciaActi"=>$frecuenciaActi
        ));
    }

    public function createEstandar(){
        $Estandar = new Estandar();

        //Paso de Parametros
        $Estandar->setTitulo($_POST['titulo']);
        $Estandar->setIdRevision($_POST['idRevision']);
        $Estandar->setIdResponsableEje($_POST['idResponsableEje']);
        $Estandar->setTime($_POST['time']);
        $Estandar->setIdFrecuenciaActi($_POST['idFrecuenciaActi']);
        $Estandar->setIdPilar($_POST['idPilar']);
        $Estandar->setIdTipoEstandar($_POST['idTipoEstandar']);
        $Estandar->setIdImpacto($_POST['idImpacto']);
        $Estandar->setIdMaquina($_POST['idMaquina']);
        $Estandar->setIdMaquinaSeccion($_POST['idSeccion']);
        $Estandar->setIdProyecto($_POST['idProyecto']);
        $Estandar->setIdDepartamento($_POST['idDepartamento']);
        $Estandar->setIdPlanta($_POST['idPlanta']);
        $Estandar->setNoControl($_POST['noControl']);
        $Estandar->setElaboro($_POST['elaboro']);
        $Estandar->setFechaElaboracion($_POST['fechaElaboracion']);
        $Estandar->setRevisionUser($_POST['revision']);
        $Estandar->setFechaRevision($_POST['fechaRevision']);
        $Estandar->setAprobo($_POST['aprobo']);
        $Estandar->setFechaAprobo($_POST['fechaAprobo']);
        $noClave="".$_POST['noControl'];
        /**Subir el archivo al Server */
        $_FILES["file"]["name"] = $noClave.".pdf";
        if(move_uploaded_file($_FILES["file"]["tmp_name"],"view/docs/estandar/".$_FILES["file"]["name"])){
            //Insertar el Estandar
            $Estandar->insert();
            //Redirigue al inex...
            $this->redirect('estandar','index');
        }else{
            $this->redirect('estandar','index');
        }
    }

    public function mostrarEstandar(){
        session_start();
        $estandar = new Estandar();
        $datos = $estandar->getAllInerJoin();
        $this->view("mostrarEstandar",array("datos" =>$datos));
    }

    public function eliminarEstandar(){
        $estandar = new Estandar();
        $estandar->update($_GET['valor']);
        $this->redirect('estandar','mostrarEstandar');
    }

}

?>