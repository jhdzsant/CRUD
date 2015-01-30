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
        $data['contenido'] = 'index';
        $this->load->view('template',$dato);
    }

}