<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 01/02/2015
 * Time: 05:18 PM
 */
class User_profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sesion =  ($this->session->userdata('usuario'));

        echo $sesion;
        if(!isset  ($sesion) ||  $sesion == '' ||  $sesion == NULL){
            redirect(base_url('login', 'refresh'));
        }
        $session = $this->session->userdata('usuario');
        $dato['contenido'] = 'pages/user_profile';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['footer'] = 'partials/footer';
        $dato['menu_items'] = 'partials/menu_items';
        $dato['menu_items_sm'] = 'partials/menu_items_sm';
        $dato['titulo'] = 'Perfil de Usuario';
        $dato['usuario'] = $session;
        //Con esta varible es como se debe puede pasar la variable de sesion $session
        $this->load->view('template',$dato);
    }
}