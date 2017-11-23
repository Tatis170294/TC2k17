<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

  public function __construct() {
      parent::__construct();
  }

  public function login($matricula, $password) {
    $this->db->select('Matricula, Nombre, Correo, Contrasena');
    $this->db->from('usuario');
    $this->db->where('Matricula',$matricula);
    $this->db->where('Contrasena',$password);
    $this->db->limit(1);

    $query = $this->db->get();
    if($query->num_rows() == 1) {
      return $query->result();
    }
    else {
      return false;
    }
  }

  public function insert($nombre, $correo, $contrasena, $matricula) {
    $data = array(
      'Matricula' => $matricula,
      'Nombre' => $nombre,
      'Correo' => $correo,
      'Contrasena' => $contrasena
    );
      $this->db->insert('usuario', $data);
  }

  public function getAll() {
    $this->db->select('Matricula, Nombre, Correo');
    $this->db->from('usuario');
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
