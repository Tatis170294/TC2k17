<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper('form');
    $this->load->view('templates/header1');
    $this->load->view('pages/site/registro');
  }

  public function insert() {
  	$this->load->library('form_validation');
    $this->form_validation->set_rules('matricula','Matrícula','required');
    $this->form_validation->set_rules('nombre','Nombre','required');
    $this->form_validation->set_rules('correo','Correo','required');
    $this->form_validation->set_rules('contrasena','Contraseña','required');
    

    if($this->form_validation->run() == false) {
      $this->load->view('templates/header1');
      $this->load->view('pages/site/registro');
    }
    else {
    	$matricula = $this->input->post('matricula');
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $contrasena = $this->input->post('contrasena');
        $this->load->model('usuarios');
        $this->usuarios->insert($nombre, $correo, $contrasena, $matricula);
        redirect('login','refresh');
    }
  }
}
?>
