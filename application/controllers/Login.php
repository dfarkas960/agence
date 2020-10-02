<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Users_model');
    }

    public function login()
    {
        $data['title'] = 'connexion';
        $this->load->view('third_party/header');
        $this->load->view('users/login');
        $this->load->view('third_party/footer');
    }


    public function LoginUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('../third_party/header');
            $this->load->view('users/login');
            $this->load->view('../third_party/footer');
        } else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));


            $options = array("cost" => 4);
            $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);


            $checkEmail = $this->Users_model->checkDuplicate($email);

            if ($checkEmail == 1) {
                $getUserDetails = $this->Users_model->userExist($email);

                if (password_verify($password, $getUserDetails['password'])) {

                    unset($getUserDetails['password']);
                    unset($getUserDetails['created']);

                    $this->session->set_userdata($getUserDetails);
                    redirect('login/LoginThankyou', 'refresh');

                } else {
                    $data['errorMsg'] = "Mauvais email ou password";
                    $this->load->view('../third_party/header');
                    $this->load->view('users/login', $data);
                    $this->load->view('../third_party/footer');
                }


            } else {
                $data['errorMsg'] = 'Login (utilisateur) n\'existe pas';
                $this->load->view('../third_party/header');
                $this->load->view('users/login', $data);
                $this->load->view('../third_party/footer');
            }
        }
    }


    function LoginThankyou()
    {
        if (!isset($this->session->email)) {
            redirect('login', 'refresh');
        }
        $this->load->view('../third_party/header');
        $this->load->view('users/login_merci');
        $this->load->view('../third_party/footer');

    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('pages/index','refresh');

    }





}
