<?php
class UsuarioModelo extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function getUsuarios(){

        $this->db->select('*');
        $this->db->from('usuario');
        $respuesta = $this->db->result();
        return encode_json($respuesta);
    }

    function addUsuario($email, $password){
        $insert = array(
            "email"    => $email,
            "password" => $password
        );
        $this->db->insert('users', $insert);
        return true;
    }

    function updUsuario($email, $password, $id){
        $upd = array(
            "email"    => $email,
            "password" => $password
        );
        $this->db->where('id',$id);
        $this->db->update('users', $upd);
        return true;
    }

    function delUsuario($id){
        $upd = array(
            "activo" => 0
        );
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario',$upd);
        return true;
    }
}
