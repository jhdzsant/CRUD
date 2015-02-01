<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 29/01/2015
 * Time: 10:33 AM
 */

class Home extends CI_Controller{

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
        $dato['contenido'] = 'index';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['footer'] = 'partials/footer';
        $dato['menu_items'] = 'partials/menu_items';
        $dato['menu_items_sm'] = 'partials/menu_items_sm';
        $dato['titulo'] = 'Inicio';
        //Con esta varible es como se debe puede pasar la variable de sesion $session
        $this->load->view('template',$dato);

    }

    public function error404()
{
        $dato['contenido'] = 'pages/error-404';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['footer'] = 'partials/footer';
        $dato['menu_items'] = 'partials/menu_items';
        $dato['menu_items_sm'] = 'partials/menu_items_sm';
        $dato['titulo'] = 'Error 404';

        $this->load->view('template',$dato);
}
    public function error500()
    {
        $dato['contenido'] = 'pages/error-500';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['menu_items_sm'] = 'partials/menu_items_sm';
        $dato['footer'] = 'partials/footer';
        $dato['titulo'] = 'Error 500';

        $this->load->view('template',$dato);
    }
}