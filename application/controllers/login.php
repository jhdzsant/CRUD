<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 29/01/2015
 * Time: 09:59 PM
 */

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function loginUser()
    {
        if ($this->input->post("email") && $this->input->post("password")) {
            $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
            if ($this->form_validation->run() == false) {
                echo "Formulario incompleto";
            } else {
                $this->load->model("login_model");
                $email = $this->input->post("email");
                $password = $this->input->post("password");
                $loginUser = $this->login_model->loginUser($email, $password);
                if ($loginUser === true) {
                    echo "success";
                    redirect(base_url()."home");
                } else {
                    echo "failed";
                    base_url()."login";
                }
            }
        } else {
            echo "Formulario incompleto";
        }

    }

    public function logoutUser()
    {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }

}