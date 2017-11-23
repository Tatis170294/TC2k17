<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function insert($idPropuesta) {
    if($this->session->userdata('logged_in')) {
      $session_data = $this->session->userdata('logged_in');
      $data = array();
      $data['idPropuesta'] = $idPropuesta;
      $this->load->view('templates/header2',$session_data);
      $this->load->view('templates/menu',$session_data);
      $this->load->view('pages/comentario/create',$data);
      $this->load->view('templates/footer');
    }
    else {
      redirect('login','refresh');
    }
  }

  public function insert_post($idPropuesta) {
    if($this->session->userdata('logged_in')) {
      if($this->input->post()) {
        $session_data = $this->session->userdata('logged_in');
        //fecha de hoy
        $date = date("Y-m-d");
        $comentario = $this->input->post('comentario');
        $this->load->model('comentarios');
        //primero se inserta el comentario a la base de datos y recuperamos el último id insertado
        $lastId = $this->comentarios->insert($comentario, $date);
        //ahora insertamos a la tabla de propuesta has comentario
        $this->load->model('propuestas_comentarios');
        $this->propuestas_comentarios->insert($idPropuesta, $lastId);
        redirect('propuesta_materia/getById/'.$idPropuesta,'refresh');
      }
      else {
        $this->insert();
      }
    }
    else {
      redirect('login','refresh');
    }
  }
}

?>
