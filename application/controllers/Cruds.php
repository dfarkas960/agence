<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Cruds extends CI_Controller {


 function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation','session');
  $this->load->model('Cruds_model');
  if(! $this->session->userdata('entrance')) {
    redirect('connexion/index');
  }
 }

 public function index(){

$data['proprios'] = $this->Cruds_model->proprios_list();
$data['locataire']=$this->Cruds_model->locataire_list();
$data['biens']=$this->Cruds_model->biens_list();

$this->load->view('crud', $data);
}






 public function bien_voir($Id=0){
   // load base_url
    $this->load->helper('url');
    $Id = $this->uri->segment(3);
    $data['bien'] = $this->Cruds_model->voirBiens($Id);
    $this->load->view('vue_Bien',$data);
 }

}
?>
