<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper('form');
    $this->load->view('templates/header1');
    $this->load->view('pages/site/login');
  }
}
?>
