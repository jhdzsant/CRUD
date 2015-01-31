<?php

class Usuario extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('usuariomodelo');
    }

    function index(){
        // $sesion busca el valor que alla en la sesion
        $sesion =  ($this->session->userdata('usuario'));

        // Verifica si $sesion esta definido, si no tiene valor o si el valor es nulo
        if(!isset  ($sesion) ||  $sesion == '' ||  $sesion == NULL){
            //redirecciona a la pagina de login
            redirect(base_url('login', 'refresh'));
        }
        $dato['contenido'] = 'usuario/usuarioconsulta';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Registrar Usuario';
        $this->load->view('template',$dato);
        }
    function getUsuarios(){
        $usuario = $this->usuariomodelo->getUsuarios();
        $dato['contenido'] = 'usuario/usuarioconsulta';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Registrar Usuario';
        $dato['usuario'] = $usuario;
        $this->load->view('template',$dato);
    }

    function addUsuario(){
        $this->load->view('usuario');
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');
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
