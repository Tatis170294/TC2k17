<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuesta_Materia extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function getById($idPropuesta) {
    if($this->session->userdata('logged_in')) {
      $session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('propuestas_materias');
      $data['propuesta'] = $this->propuestas_materias->getById($idPropuesta);
      $this->load->model('comentarios');
      $data['comentarios_propuesta'] = $this->comentarios->getAllById($idPropuesta);
      $this->load->view('templates/header2',$session_data);
      $this->load->view('templates/menu',$session_data);
      $this->load->view('pages/propuesta/detail',$data);
      $this->load->view('templates/footer');
    }
    else {
      redirect('login', 'refresh');
    }
  }
}

?>
