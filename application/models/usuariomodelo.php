<?php
class UsuarioModelo extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function getUsuarios(){
        $where = array(
            "activo" => 1
        );
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where($where);
        $respuesta = $this->db->result();
        return encode_json($respuesta);
    }

    function addUsuario($email, $password){
        $insert = array(
            "email"          => $email,
            "password" => $password
        );
        $this->db->insert('users', $insert);
        return true;
    }

    function updUsuario($nombre, $apellidopaterno, $usuario, $contraseña, $id_usuario){
        $upd = array(
            "nombre"          => $nombre,
            "apellidopaterno" => $apellidopaterno,
            "usuario"         => $usuario,
            "contraseña"      => $contraseña
        );
        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('usuario', $upd);
        return true;
    }

    function delUsuario($id_usuario){
        $upd = array(
            "activo" => 0
        );
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario',$upd);
        return true;
    }
}