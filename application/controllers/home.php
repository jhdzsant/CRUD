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
        $dato['contenido'] = 'index';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Inicio';

        $this->load->view('template',$dato);

    }

    public function error404()
{
        $dato['contenido'] = 'pages/error-404';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Error 404';

        $this->load->view('template',$dato);
}
    public function error500()
    {
        $dato['contenido'] = 'pages/error-500';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Error 500';

        $this->load->view('template',$dato);
    }
}