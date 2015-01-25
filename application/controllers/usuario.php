<?php

class Usuario CI_Controller{
    public function __construct(){
        parent::__construct();
        $modelo = $this->load->model('usuario');
    }

    function index(){
        $sesion = $this->session->getUsuarioId();
        if(!isset $sesion || $sesion = '' || $sesion == NULL){
            redirect($base_url."/dashboard");
        }else{
            redirect('localhost/login');
        }
    }
    function getUsuarios(){
        $this->$modelo->getUsuarios();
    }

    function addUsuario(){
        $nombre          = $this->input->post('nombre');
        $apellidopaterno = $this->input->post('apellidopaterno');
        $usuario         = $this->input->post('usuario');
        $contraseña      = $this->input->post('contraseña');

        $parametros = $this->input->post('parametros');
        $dato = $this->$modelo->addUsuario($nombre, $apellidopaterno, $usuario, $contraseña);
        if($dato = TRUE){
            echo "el usuario se agrego correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function updUsuario(){
        $nombre          = $this->input->post('nombre');
        $apellidopaterno = $this->input->post('apellidopaterno');
        $usuario         = $this->input->post('usuario');
        $contraseña      = $this->input->post('contraseña');
        $id_usuario      = $this->input->post('id_usuario');
        $dato = $this->$modelo->updUsuario($nombre, $apellidopaterno, $usuario, $contraseña, $id_usuario);
        if($dato = TRUE){
            echo "el usuario se áctualizo correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function delUsuario(){
        $id_usuario      = $this->input->post('id_usuario');
        $dato = $this->$modelo->delUsuario($id_usuario);
        if($dato = TRUE){
            echo "el usuario se borro correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function login(){

    }

}
