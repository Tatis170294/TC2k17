<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuestas_Materias extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function insert($lastId, $mats_prop) {
    foreach ($mats_prop['materias'] as $materia) {
      $data = array(
      'Propuesta_idPropuesta' => $lastId,
      'Materia_NRC' => $materia
      );
      $this->db->insert('propuesta_has_materia', $data);
    }  
  }

  public function getById($idPropuesta) {
    $this->db->select('Materia_NRC, Nombre');  
    $this->db->from('propuesta_has_materia');
    $this->db->join('materia', 'propuesta_has_materia.Materia_NRC = materia.NRC');
    $this->db->where('Propuesta_idPropuesta', $idPropuesta);
    $query = $this->db->get();
    return $query->result();
  }
}

?>