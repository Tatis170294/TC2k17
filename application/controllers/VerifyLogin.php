<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

  function __construct() {
   parent::__construct();
   $this->load->model('usuarios');
  }

  function index() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('matricula','Matrícula','required');
    $this->form_validation->set_rules('password','Password','required|callback_check_database');

    if($this->form_validation->run() == false) {
      $this->load->view('templates/header1');
      $this->load->view('pages/site/login');
    }
    else {
      $session_data = $this->session->userdata('logged_in');
      if($session_data['Matricula'] == 111111111){
        //si es secretaría académica dirigirlo a la administración de los usuarios
        redirect('usuario', 'refresh');
      }
      else {
        //si es alumno dirigirlo a la propuesta de materias
        redirect('materia', 'refresh');
      }
    }
  }

  function check_database($password) {
    $matricula = $this->input->post('matricula');
    $result = $this->usuarios->login($matricula, $password);
    if($result) {
      $session_array = array();
      foreach($result as $row) {
        $session_array = array(
        'Matricula' => $row->Matricula,
        'Nombre' => $row->Nombre,
        'Correo' => $row->Correo,
        'Contrasena' => $row->Contrasena,
        );
        $this->session->set_userdata('logged_in', $session_array);
      }
      return true;
    }
     else {
       $this->form_validation->set_message('check_database', 'Matrícula o password inválidos');
       return false;
     }
 }

 function logout() {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }

}

?>
