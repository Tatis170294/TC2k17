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
      $data['matricula'] = $session_data['Matricula'];
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/materia/index',$data);
			$this->load->view('templates/footer');
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
        $materia = $this->materias->getById($nrc);
        $data['NRC'] = $materia->NRC;
        $data['Nombre'] = $materia->Nombre;

        $this->load->view('templates/header2',$session_data);
        $this->load->view('templates/menu',$session_data);
        $this->load->view('pages/materia/update',$data);
        $this->load->view('templates/footer');
      }
      else {
        $data['NRC'] = null;
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

  public function getById($matricula) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('usuarios');
      $data['usuario'] = $this->usuarios->getById($matricula);
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/usuario/detail',$data);
			$this->load->view('templates/footer');
		}
    else {
			redirect('login', 'refresh');
		}
  }

  public function update($matricula) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('usuarios');
      $usuario = $this->usuarios->getUpdateInfoById($matricula);
      $data['nombre'] = $usuario->Nombre;
      $data['correo'] = $usuario->Correo;
      $data['contrasena'] = $usuario->Contrasena;
      $this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/usuario/update',$data);
			$this->load->view('templates/footer');
    }
    else {
      redirect('login','refresh');
    }
  }

  public function update_post($matricula) {
    if($this->session->userdata('logged_in')) {
      if($this->input->post()) {
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $contrasena = $this->input->post('contrasena');
        $this->load->model('usuarios');
        $this->usuarios->update($nombre, $correo, $contrasena, $matricula);
        redirect('usuario/getById/'.$matricula,'refresh');
      }
      else {
        $this->update();
      }
    }
    else {
      redirect('login','refresh');
    }
  }

  public function delete($id_usuario) {
    if($this->session->userdata('logged_in')) {
      $this->load->model('usuarios');
      $this->usuarios->delete($id_usuario);
      redirect('usuario','refresh');
		}
    else {
			redirect('login', 'refresh');
		}
  }
}

?>
