<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('usuarios');
      $data['usuarios'] = $this->usuarios->getAll();
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/usuario/index',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('login', 'refresh');
		}
  }

  public function insert($matricula=null) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('usuarios');
      if($matricula) {
        $usuario = $this->usuarios->getById($matricula);
        $data['Matricula'] = $usuario->Matricula;
        $data['Nombre'] = $usuario->Nombre;
        $data['Correo'] = $usuario->Correo;
        $data['Contrasena'] = $usuario->Contrasena;

        $this->load->view('templates/header2',$session_data);
        $this->load->view('templates/menu',$session_data);
        $this->load->view('pages/usuario/update',$data);
        $this->load->view('templates/footer');
      }
      else {
        $data['Matricula'] = null;
        $data['Nombre'] = null;
        $data['Correo'] = null;
        $data['Contrasena'] = null;

        $this->load->view('templates/header2',$session_data);
        $this->load->view('templates/menu',$session_data);
        $this->load->view('pages/usuario/create',$data);
        $this->load->view('templates/footer');
      }
    }
    else {
      redirect('login','refresh');
    }
  }

  public function insert_post($matricula=null) {
    if($this->session->userdata('logged_in')) {
      if($this->input->post()) {
        $matricula = $this->input->post('matricula');
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $contrasena = $this->input->post('contrasena');
        $this->load->model('usuarios');
        $this->usuarios->insert($nombre, $correo, $contrasena, $matricula);
        redirect('usuario','refresh');
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
      $data['sesion_usuario'] = $session_data;
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/usuario/detail',$data);
			$this->load->view('templates/footer');
		}
    else {
			redirect('login', 'refresh');
		}
  }

  public function getMyInfo($matricula) {
    if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
      $data = array();
      $this->load->model('usuarios');
      $data['usuario'] = $this->usuarios->getById($matricula);
			$this->load->view('templates/header2',$session_data);
			$this->load->view('templates/menu',$session_data);
      $this->load->view('pages/usuario/myinfo',$data);
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
