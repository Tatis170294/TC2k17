<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuestas_Comentarios extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function insert($idPropuesta, $lastId) {
      $data = array(
      'Propuesta_idPropuesta' => $idPropuesta,
      'Comentario_idComentario' => $lastId
      );
      $this->db->insert('propuesta_has_comentario', $data);
  }
}

?>