<?php
/**CONTROLLADOR LOGIN*/

class LoginController extends ControladorBase {

    public function LoginController() {
        parent::ControladorBase();
    }

    public function index() {
        #Cargar mainView.php
        $this->view("login", array(
            "Title" => "Bienvenido al inicio de Session",
            "error" => "<div class='alert alert-success' role='alert'>Ingresa tu usuario y contraseña</div>"));
    }

    public function validarLogin(){
        if ($_POST["user"] == '' || $_POST["pass"] == '') {
            $this->error();
        }else{
            session_start();
            $Login = new Login();

            $Login->setUsuairo($_POST['user']);
            $Login->setPassword($_POST['pass']);

            if($Login -> validaUsuario()){
                $_SESSION['usuario'] = $_POST["user"];
                $this->view("main", array("" => "Selecciona una opción para continuar"));
            }else{
                $this->errorRegistro(); 
            }
        }
    }

    public function errorRegistro(){
        $this->view("login", array(
            "Login" => "TAG:Controlador de login",
            "error" => "<div class='alert alert-danger' role='alert'>Tu usuario y contraseña no son validos!</div>"));
    }

    public function error() {
        $this->view("login", array(
        "Login" => "TAG:Controlador de login",
        "error" => "<div class='alert alert-warning' role='alert'>Todos los campos son Obligatorios!</div>"));
    }

    public function salir(){
        session_start();
        session_destroy();
        $this->view("index", array("Pagina Principal" => "Pagina Principal"));
    }

}

?>