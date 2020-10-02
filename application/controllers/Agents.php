<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Agents extends CI_Controller {

  public function index(){
      $this->load->view('agents');
  }

 function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation','session');
  $this->load->model('Agents_model');
 }

 public function loginAdm()
 {
     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('password', 'Password', 'trim|required');

     $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

     if ($this->form_validation->run() == FALSE) {
         $this->load->view('connect');

     } else {
         $email = $this->security->xss_clean($this->input->post('email'));
         $password = $this->security->xss_clean($this->input->post('password'));


         $options = array("cost" => 4);
         $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

         $checkEmail = $this->Agents_model->checkDuplicate($email);

         if ($checkEmail == 1) {
             $getUserDetails= $this->Agents_model->agentsExist($email);

             if (password_verify($password, $getUserDetails['password'])) {
               $data['response']= $getUserDetails;
               $this->session->set_userdata('entrance', true);

                 redirect ('cruds/index');

             } else {
                 $data['errorMsg'] = "Mauvais password";

                 $this->load->view('connect', $data);

             }


         } else {
             $data['errorMsg'] = 'Email n\'existe pas';

             $this->load->view('connect', $data);

         }
     }
 }


 public function registerAgents()
 {
     $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
     $this->form_validation->set_rules('login', 'Login', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required');
     $this->form_validation->set_rules('photo_agent', 'Photo_agent', 'trim|required');
     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
     $this->form_validation->set_rules('adm', 'Adm', 'trim|required');


     $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

     if ($this->form_validation->run() == FALSE)
     {
         $this->load->view('agents');
     }
     else
     {
         $nom 	= $this->security->xss_clean($this->input->post('nom'));
         $login 	= $this->security->xss_clean($this->input->post('login'));
         $password 	= $this->security->xss_clean($this->input->post('password'));
         $photo_agent 	= $this->security->xss_clean($this->input->post('photo_agent'));
         $email 		= $this->security->xss_clean($this->input->post('email'));
         $mobile	= $this->security->xss_clean($this->input->post('mobile'));
         $adm	= $this->security->xss_clean($this->input->post('adm'));

         $options = array("cost"=>4);
         $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);


         $insertData = array('nom'=>$nom,
              'login'=>$login,
              'password'=>$hashPassword,
              'photo_agent'=>$photo_agent,
              'email'=>$email,
              'mobile' =>$mobile,
              'adm' =>$adm,
            );




         $checkDuplicate = $this->Agents_model->checkDuplicate($email);

         if($checkDuplicate == 0)
         {
             $insertUsers = $this->Agents_model->insertAgents($insertData);

             if($insertUsers)
             {
                 $this->session->set_userdata(array(
                        'nom'=>$nom,
                        'login'=>$login,
                        'password'=>$hashPassword,
                        'photo_agent'=>$photo_agent,
                        'email'=>$email,
                        'mobile' =>$mobile,
                        'adm' =>$adm,
                 ));

                 redirect('agents');
             }
             else
             {
                 $data['errorMsg'] = 'Impossible d\'enregistrer. Essayez de nouveau, svp';

                 $this->load->view('agents',$data);

             }
         }
         else
         {
             $data['errorMsg'] = 'Cet email est déja enregistré';


             $this->load->view('agents',$data);

         }
     }
 }

}

?>
