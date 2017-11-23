<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('materias');
      $data['materias'] = $this->materias->getAll();
      $data['sesion_usuario'] = $session_data;
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/materia/index',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('login', 'refresh');
		}
  }

  public function insert_prop() {
    if($this->session->userdata('logged_in')) {
    $session_data = $this->session->userdata('logged_in');
      //si se envía la propuesta
      if($this->input->post()) {
          //guardamos los ids de las materias propuestas en un arreglo para después insertar esos ids en la bd
          $mats_prop = array();
          $mats_prop['materias'] = $this->input->post('materias_propuestas');
          //fecha hoy
          $date = date("Y-m-d");
          //insertamos la propuesta primeramente en la bd y recuperamos el id de ésta
          $this->load->model('propuestas');
          $lastId = $this->propuestas->insert($date,$session_data['Matricula']);
          //una vez que se haya insertado la propuesta insertamos las materias que fueron propuestas
          $this->load->model('propuestas_materias');
          $this->propuestas_materias->insert($lastId, $mats_prop);
          //una vez insertado todo redirigimos al usuario al index de las propuestas
          redirect('propuesta', 'refresh');
      }
      else {
        redirect('materia', 'refresh');
      }
    }
    else {
      redirect('login', 'refresh');
    }
  }
  public function insert($nrc=null) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('materias');
      if($nrc) {
        $materia = $this->materias->getUpdateInfoById($nrc);
        $data['Nrc'] = $materia->NRC;
        $data['Nombre'] = $materia->Nombre;
        $this->load->view('templates/header2',$session_data);
        $this->load->view('templates/menu',$session_data);
        $this->load->view('pages/materia/update',$data);
        $this->load->view('templates/footer');
      }
      else {
        $data['Nrc'] = null;
        $data['Nombre'] = null;
        $this->load->view('templates/header2',$session_data);
        $this->load->view('templates/menu',$session_data);
        $this->load->view('pages/materia/create',$data);
        $this->load->view('templates/footer');
      }
    }
    else {
      redirect('login','refresh');
    }
  }

  public function insert_post($nrc=null) {
    if($this->session->userdata('logged_in')) {
      if($this->input->post()) {
        $nrc = $this->input->post('nrc');
        $nombre = $this->input->post('nombre');
        $this->load->model('materias');
        $this->materias->insert($nrc, $nombre);
        redirect('materia','refresh');
      }
      else {
        $this->insert();
      }
    }
    else {
      redirect('login','refresh');
    }
  }

  public function update($nrc) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('materias');
      $materia = $this->materias->getUpdateInfoById($nrc);
      $data['Nrc'] = $usuario->NRC;
      $data['Nombre'] = $usuario->Nombre;
      $this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/materia/update',$data);
			$this->load->view('templates/footer');
    }
    else {
      redirect('login','refresh');
    }
  }

  public function update_post($nrc) {
    if($this->session->userdata('logged_in')) {
      if($this->input->post()) {
        $nombre = $this->input->post('nombre');
        $this->load->model('materias');
        $this->materias->update($nrc, $nombre);
        redirect('materia','refresh');
      }
      else {
        $this->update();
      }
    }
    else {
      redirect('login','refresh');
    }
  }

  public function delete($nrc) {
    if($this->session->userdata('logged_in')) {
      $this->load->model('materias');
      $this->materias->delete($nrc);
      redirect('materia','refresh');
		}
    else {
			redirect('login', 'refresh');
		}
  }
}

?>
