<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function insert($nrc, $nombre) {
    $data = array(
      'NRC' => $nrc,
      'Nombre' => $nombre
    );
      $this->db->insert('materia', $data);
  }

  public function getAll() {
    $this->db->select('NRC, Nombre');
    $this->db->from('materia');
    $query = $this->db->get();
    return $query->result();
  }

  public function getUpdateInfoById($nrc) {
    $this->db->select('NRC, Nombre');
    $this->db->from('materia');
    $this->db->where('NRC', $nrc);
    $query = $this->db->get();
    return $query->row();
  }

  public function update($nrc, $nombre) {
    $data = array(
            'Nombre' => $nombre
          );
    $this->db->where('NRC', $nrc);
    $this->db->update('materia', $data);
  }

  public function delete($nrc) {
    $this->db->where('NRC', $nrc);
    $this->db->delete('materia');
  }
}
?>
