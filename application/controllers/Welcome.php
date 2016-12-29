<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("adminModel");
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function cargaUsuario() {
        $roles = $this->adminModel->getRoles();
        $this->load->view('admin/usuario_view', array("roles"=>$roles));
    }

    public function cargaRol() {
        $this->load->view('admin/roles_view');
    }

    public function cargaPrivilegio() {
        $this->load->view('admin/privilegio_view');
    }
    
    public function getUsuarios(){
        echo json_encode($this->adminModel->getUsuarios());
    }
    
    public function getRoles(){
        echo json_encode($this->adminModel->getRoles());
    }
    
    public function crearUsuario(){
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $especialidad = $this->input->post("especialidad");
        $telefono = $this->input->post("telefono");
        $rol = $this->input->post("rol");
        
        if ($this->adminModel->crearUsuario($rut,$nombre,$apellido,$especialidad,$telefono,$rut,$rol)) {
            echo json_encode(array("msg"=>"ok"));
        }else{
            echo json_encode(array("msg"=>"error"));
        }
        
    }

}
