<?php

class Login extends EntidadBase {

    private $idLogin;
    private $idEmpleado;
    private $email;
    private $usuairo;
    private $password;
    private $fechaRegistro;
    private $permisos;
    private $idPlanta;
    private $estado;
    
        public function Login() {
        $table = "login";
        parent ::EntidadBase($table);
    }

    public function validaUsuario() {
        $query = "SELECT * FROM login WHERE usuario = '$this->usuairo' and password = '$this->password'";
        $result = $this->db()->query($query);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function getIdLogin() {
        return $this->idLogin;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsuairo() {
        return $this->usuairo;
    }

    function getPassword() {
        return $this->password;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsuairo($usuairo) {
        $this->usuairo = $usuairo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function getPermisos() {
        return $this->permisos;
    }

    function getIdPlanta() {
        return $this->idPlanta;
    }

    function setPermisos($permisos) {
        $this->permisos = $permisos;
    }

    function setIdPlanta($idPlanta) {
        $this->idPlanta = $idPlanta;
    }

}

?>