<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuestas extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function insert($date, $matricula) {
    $data = array(
      'fecha' => $date,
      'Usuario_Matricula' => $matricula
    );
      $this->db->insert('propuesta', $data);
      return $this->db->insert_id();
  }

  public function getAll() {
    $this->db->select('idPropuesta, fecha, Matricula, Nombre, Correo');  
    $this->db->from('propuesta');
    $this->db->join('usuario', 'propuesta.Usuario_Matricula = usuario.Matricula');
    $query = $this->db->get();
    return $query->result();
  }
}
?>
