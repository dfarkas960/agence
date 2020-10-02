<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Proprios extends CI_Controller {


    public function addproprio(){
        $this->load->view('proprio');
    }


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Proprios_model');

    }

    public function registerProprio()
    {
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required');
        $this->form_validation->set_rules('civilite', 'Civilite', 'trim|required');
        $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required');
        $this->form_validation->set_rules('ville', 'Ville', 'trim|required');
        $this->form_validation->set_rules('code_postal', 'Code_postal', 'trim|required');
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('login', 'Login', 'trim|required');


        $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('proprio');

        }
        else
        {

            $nom 	= $this->security->xss_clean($this->input->post('nom'));
            $prenom 	= $this->security->xss_clean($this->input->post('prenom'));
            $civilite 	= $this->security->xss_clean($this->input->post('civilite'));
            $adresse 	= $this->security->xss_clean($this->input->post('adresse'));
            $ville 	= $this->security->xss_clean($this->input->post('ville'));
            $code_postal 	= $this->security->xss_clean($this->input->post('code_postal'));
            $telephone 	= $this->security->xss_clean($this->input->post('telephone'));
            $mobile 	= $this->security->xss_clean($this->input->post('mobile'));
            $email 		= $this->security->xss_clean($this->input->post('email'));
            $password 	= $this->security->xss_clean($this->input->post('password'));
            $login 	= $this->security->xss_clean($this->input->post('login'));



            $options = array("cost"=>4);
            $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);


            $insertData = array('nom'=> $nom,
                'prenom' => $prenom,
                'civilite '=>$civilite,
                'adresse' => $adresse,
                'ville' => $ville,
                'code_postal' => $code_postal,
                'telephone' => $telephone,
                'mobile' => $mobile,
                'email' => $email,
                'password' => $hashPassword,
                'login' => $login,
              );




            $checkDuplicate = $this->Proprios_model->checkDuplicate($email);

            if($checkDuplicate == 0)
            {
                $insertUsers = $this->Proprios_model->insertProprio($insertData);

                if($insertUsers)
                {
                  $data['errorMsg'] = 'le propriétaire est bien enregistré';
                  $this->load->view('proprio',$data);
                }
                else
                {
                    $data['errorMsg'] = 'Impossible d\'enregistrer. Essayez de nouveau, svp';
                    $this->load->view('proprio',$data);
                }
            }
            else
            {
                $data['errorMsg'] = 'Cet email est déja enregistré';
                $this->load->view('proprio',$data);

            }
        }
    }

    public function loginProprio()
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


            $checkEmail = $this->Proprios_model->checkDuplicate($email);

            if ($checkEmail == 1) {
                $getUserDetails= $this->Proprios_model->proprioExist($email);

                if (password_verify($password, $getUserDetails['password'])) {
                  $data['response']= $getUserDetails;
                    $this->load->view('proprio_single', $data);

                } else {
                    $data['errorMsg'] = "Mauvais password";

                    redirect('connexion', $data);

                }


            } else {
                $data['errorMsg'] = 'Email n\'existe pas';

                redirect('connexion', $data);

            }
        }
    }

    public function updateProprio()
    {

          $nom 	= $this->security->xss_clean($this->input->post('nom'));
          $prenom 	= $this->security->xss_clean($this->input->post('prenom'));
          $adresse 	= $this->security->xss_clean($this->input->post('adresse'));
          $ville 	= $this->security->xss_clean($this->input->post('ville'));
          $code_postal 	= $this->security->xss_clean($this->input->post('code_postal'));
          $telephone 	= $this->security->xss_clean($this->input->post('telephone'));
          $mobile 	= $this->security->xss_clean($this->input->post('mobile'));

          $login 	= $this->security->xss_clean($this->input->post('login'));

          $civilite = $this->security->xss_clean($this->input->post('civilite'));



          $insertData = array('nom'=> $nom,
              'prenom' => $prenom,
              'civilite '=>$civilite,
              'adresse' => $adresse,
              'ville' => $ville,
              'code_postal' => $code_postal,
              'telephone' => $telephone,
              'mobile' => $mobile,
              'login' => $login,
            );

                $insertUsers = $this->Proprios_model->modifieProprio($insertData,$email);

                if($insertUsers)
                {
                  $data['errorMsg'] = 'le propriétaire est bien enregistré';
                  redirect('connexion');
                }
                else
                {
                    $data['errorMsg'] = 'Impossible de modifier. Essayez de nouveau, svp';
                    redirect('connexion');
                }

        }
    }





  ?>
