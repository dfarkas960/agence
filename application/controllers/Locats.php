<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Locats extends CI_Controller {


    public function addLocats(){
        $this->load->view('locataire');
    }


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Locats_model');

    }

    public function registerLocats()
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
        $this->form_validation->set_rules('loyer_paye', 'Loyer_paye', 'trim|required');
        $this->form_validation->set_rules('date_in', 'date_in', 'trim|required');
        $this->form_validation->set_rules('date_out', 'date_out', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('locataire');

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
            $loyer_paye 	= $this->security->xss_clean($this->input->post('loyer_paye'));
            $date_in 	= $this->security->xss_clean($this->input->post('date_in'));
            $date_out 	= $this->security->xss_clean($this->input->post('date_out'));


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
                'loyer_paye' => $loyer_paye,
                'date_in' => $date_in,
                'date_out' => $date_out,
              );




            $checkDuplicate = $this->Locats_model->checkDuplicate($email);

            if($checkDuplicate == 0)
            {
                $insertUsers = $this->Locats_model->insertLocats($insertData);

                if($insertUsers)
                {
                  $data['errorMsg'] = 'le locataire est bien enregistré';
                  $this->load->view('locataire',$data);
                }
                else
                {
                    $data['errorMsg'] = 'Impossible d\'enregistrer. Essayez de nouveau, svp';
                    $this->load->view('locataire',$data);
                }
            }
            else
            {
                $data['errorMsg'] = 'Cet email est déja enregistré';
                $this->load->view('locataire',$data);

            }
        }
    }

    public function loginLocat()
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


            $checkEmail = $this->Locats_model->checkDuplicate($email);

            if ($checkEmail == 1) {
                $getUserDetails= $this->Locats_model->locatsExist($email);

                if (password_verify($password, $getUserDetails['password'])) {
                  $data['response']= $getUserDetails;
                    $this->load->view('locataire_single', $data);

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

    public function updateLocat() {

      $nom 	= $this->security->xss_clean($this->input->post('nom'));
      $prenom 	= $this->security->xss_clean($this->input->post('prenom'));
      $adresse 	= $this->security->xss_clean($this->input->post('adresse'));
      $ville 	= $this->security->xss_clean($this->input->post('ville'));
      $code_postal 	= $this->security->xss_clean($this->input->post('code_postal'));
      $telephone 	= $this->security->xss_clean($this->input->post('telephone'));
      $mobile 	= $this->security->xss_clean($this->input->post('mobile'));
      $email 		= $this->security->xss_clean($this->input->post('email'));
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

            $insertUsers = $this->Locats_model->modifieLocat($insertData,$email);

            if($insertUsers)
            {
              $data['errorMsg'] = 'le locataire est bien enregistré';
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
