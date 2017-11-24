<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function getAllById($idPropuesta) {
    $this->db->select('Comentario, comentario.fecha as fecha, Matricula, Nombre');  
    $this->db->from('comentario');
    $this->db->join('usuario', 'comentario.Usuario_Matricula = usuario.Matricula');
    $this->db->where('comentario.Propuesta_idPropuesta', $idPropuesta);
    $query = $this->db->get();
    return $query->result();
  }

  public function insert($comentario, $fecha, $matricula, $idPropuesta) {
    $data = array(
      'Comentario' => $comentario,
      'fecha' => $fecha,
      'Usuario_Matricula' => $matricula,
      'Propuesta_idPropuesta' => $idPropuesta
    );
      $this->db->insert('comentario', $data);
  }

}

?>