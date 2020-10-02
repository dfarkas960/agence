<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
   parent::__construct();
   $this->load->library('form_validation');
   $this->load->model('Home_model');
  }

    public function index()
    {
        $this->load->view('home');
    }

    public function contacter()
    {
      $this->load->view('contacter');
    }

    public function all_location()
    {
      $results['data']=$this->Home_model->display_locations();
      $this->load->view('all_location',$results);
    }

    public function all_vente()
    {
      $results['data']=$this->Home_model->display_ventes();
      $this->load->view('all_vente',$results);
    }

    public function single_location()
    {

      $data = array();
   // Check form submit or not
    if($this->input->post('submit') != NULL ){

     // POST data
     $postData = $this->input->post();

     $data['response'] = $postData;
      }

   // load view
      $this->load->view('single_location',$data);
      }




    public function single_vente()
    {
      
        $data = array();
     // Check form submit or not
      if($this->input->post('submit') != NULL ){

       // POST data
       $postData = $this->input->post();

       $data['response'] = $postData;
        }

     // load view
        $this->load->view('single_vente',$data);
        }


}

?>
