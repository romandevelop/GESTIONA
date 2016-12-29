<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminModel
 *
 * @author roman
 */
class AdminModel extends CI_Model {
    
    
    function crearUsuario($rut,$nombre, $apellido,$especialidad, $telefono,$clave,$rol){
        $data = array("rut"=>$rut,"nombre"=>$nombre,"apellido"=>$apellido,
            "especialidad"=>$especialidad,"telefono"=>$telefono,"clave"=>$clave,"rol"=>$rol);
        return $this->db->insert("usuario",$data);
    }
    
    
    function getRoles(){
        return $this->db->get("rol")->result();
    }
    
    function getPrivilegios(){
        return $this->db->get("privilegio")->result();
    }
    
    function getProductos(){
        return $this->db->get("producto")->result();
    }
    
    function getUsuarios(){
        $this->db->select("u.rut, u.nombre,u.apellido,u.especialidad,u.telefono, r.nombre as rol ");
        $this->db->from("usuario u");
        $this->db->join("rol r", "r.codigo = u.rol");        
        return $this->db->get()->result();
    }
    
    
    
    
    
    
    
}
