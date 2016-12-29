<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author roman
 */
class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("loginModel");
    }
    
    public function index(){
        $this->load->view("login_view");
    }
    
    public function iniciarSesion(){
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $data = $this->loginModel->validarUsuario($rut,$clave);
        if (count($data)>0) {
            if ($data[0]->rol == 1) {
                $this->session->set_userdata("user",$data);
                echo json_encode(array("x"=>"1A"));
            }else{
                echo json_encode(array("x"=>"2A"));
            }
        }else{
            echo json_encode(array("x"=>"Usuario Incorrecto!"));
        }
    }
    
    public function cerrarSesion(){
        $this->session->sess_destroy();
        redirect("login");
    }
    
    
    
    
}
