<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function insert($nrc, $nombre) {
    $data = array(
      'NRC' => $nrc,
      'Nombre' => $nombre,
      'Secretaria_MatriculaS' => 1
    );
      $this->db->insert('materia', $data);
  }

  public function getAll() {
    $this->db->select('NRC, Nombre');
    $this->db->from('materia');
    $query = $this->db->get();
    return $query->result();
  }

  public function getById($matricula) {
    $this->db->select('Matricula, Nombre, Correo, Contrasena');
    $this->db->from('usuario');
    $this->db->where('Matricula', $matricula);
    $query = $this->db->get();
    return $query->row();
  }

  public function getUpdateInfoById($matricula) {
    $this->db->select('Nombre, Correo, Contrasena');
    $this->db->from('usuario');
    $this->db->where('Matricula', $matricula);
    $query = $this->db->get();
    return $query->row();
  }

  public function update($nombre, $correo, $contrasena, $matricula) {
    $data = array(
            'Nombre' => $nombre,
            'Correo' => $correo,
            'Contrasena' => $contrasena
          );
    $this->db->where('Matricula', $matricula);
    $this->db->update('usuario', $data);
  }

  public function delete($matricula) {
    $this->db->where('Matricula', $matricula);
    $this->db->delete('usuario');
  }
}
?>
