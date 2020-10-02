<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  session
 */
class Auth_user extends CI_Model {

    protected $_login;
    protected $_id;

    protected function clear_data() {
        $this->_id = NULL;
        $this->_login = NULL;
    }

    protected function clear_session() {
        $this->session->auth_user = NULL;
    }

    protected function get_property_id() {
        return $this->_id;
    }

    protected function get_property_is_connected() {
        return $this->_id !== NULL;
    }

    protected function get_property_username() {
        return $this->_login;
    }

    protected function load_from_session() {
        if ($this->session->auth_user) {
            $this->_id = $this->session->Auth_user['id_identite'];
            $this->_login = $this->session->Auth_user['login'];
        } else {
            $this->clear_data();
        }
    }

    protected function load_user( $login) {
        return $this->db
            ->select('id_identite, login, password')
            ->from('IDENTITE')
            ->where('login', $login)
            ->get()
            ->first_row();
    }

    public function login( $login, $password) {
        $user = $this->load_user( $login);
        if (( $user !== NULL) && password_verify($password, $user->password)) {
            $this->_id = $user->id;
            $this->_login = $user->login;
            $this->save_session();
        } else {
            $this->logout();
        }
    }

    public function logout() {
        $this->clear_data();
        $this->clear_session();
    }

    protected function save_session() {
        /** @noinspection PhpLanguageLevelInspection */
        $this->session->auth_user = [
            'id_identite' => $this->_id,
            'login' => $this->_login
        ];
    }
}
