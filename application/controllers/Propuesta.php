<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuesta extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('propuestas');
      $data['propuestas'] = $this->propuestas->getAll();
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/propuesta/index',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('login', 'refresh');
		}
  }
}

?>
