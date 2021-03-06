<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 01/02/2015
 * Time: 09:55 PM
 */
class ClienteModelo extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function getCliente(){

        $consulta = $this->db->get('cliente');
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            $json_response = json_encode($data);
            return $json_response;

        }
    }

    function addCliente($nombreCliente, $rfcCliente,$statusCliente, $telefonoCliente){
        $insert = array(
            "nombreCliente"    => $nombreCliente,
            "rfcCliente"       => $rfcCliente,
            "statusCliente"    => $statusCliente,
            "telefonoCliente"  => $telefonoCliente
        );
        $this->db->insert('cliente', $insert);
        return true;
    }

    function updCliente($email, $password, $id){
        $upd = array(
            "email"    => $email,
            "password" => $password
        );
        $this->db->where('id',$id);
        $this->db->update('users', $upd);
        return true;
    }

    function delCliente($id){
        $upd = array(
            "activo" => 0
        );
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario',$upd);
        return true;
    }
}