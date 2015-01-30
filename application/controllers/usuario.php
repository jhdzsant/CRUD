<?php

class Usuario extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('usuariomodelo');
    }

    function index(){
        $this->load->view('usuario');
        /*
        $sesion = $this->session->getUsuarioId();
        if(!isset $sesion || $sesion = '' || $sesion == NULL){
            redirect($base_url."/dashboard");
        }else{
            redirect('localhost/login');
        }
        */
    }
    function getUsuarios(){
        $this->usuariomodelo->getUsuarios();
    }

    function addUsuario(){
        $this->load->view('usuario');
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $dato = $this->usuariomodelo->addUsuario($email, $password);
        if($dato = TRUE){
            echo "el usuario se agrego correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function updUsuario(){
        $id          = $this->input->post('id');
        $email       = $this->input->post('nombre');
        $password    = $this->input->post('apellidopaterno');
        $dato = $this->usuariomodelo->updUsuario($email, $password, $id);
        if($dato = TRUE){
            echo "el usuario se áctualizo correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function delUsuario()
    {
        $id = $this->input->post('id');
        $dato = $this->usuariomodelo->delUsuario($id);
        if ($dato = TRUE) {
            echo "el usuario se borro correctamente";
        } else {
            echo "Ocurrio un error";
        }
    }

}
