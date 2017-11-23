<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function getAllById($idPropuesta) {
    $this->db->select('Comentario, comentario.fecha as fecha, Matricula, Nombre');  
    $this->db->from('comentario');
    $this->db->join('propuesta_has_comentario', 'comentario.idComentario = propuesta_has_comentario.Comentario_idComentario');
    $this->db->join('propuesta', 'propuesta_has_comentario.Propuesta_idPropuesta = propuesta.idPropuesta');
    $this->db->join('usuario', 'propuesta.Usuario_Matricula = usuario.Matricula');
    $this->db->where('idPropuesta', $idPropuesta);
    $query = $this->db->get();
    return $query->result();
  }

  public function insert($comentario, $fecha) {
    $data = array(
      'Comentario' => $comentario,
      'fecha' => $fecha
    );
      $this->db->insert('comentario', $data);
      return $this->db->insert_id();
  }

}

?>