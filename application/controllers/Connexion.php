<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Connexion extends CI_Controller {

  public function index(){
      $this->load->view('connect');
  }

 function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation');
}
}
?>
