<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function checkDuplicate($email)
    {
        $this->db->select('email');
        $this->db->from('proprio');
        $this->db->like('email', $email);
        return $this->db->count_all_results();
    }

    function insertUsers($data)
    {
        if($this->db->insert('proprio', $data))
        {
        return  $this->db->insert_id();
        }
        else
        {
        return false;
        }
    }

    function userExist($email)
    {
        $this->db->select('*');
        $this->db->like('email', $email);
        $qry = $this->db->get('proprio');
        $rs = $qry->result_array();
        return $rs[0];
    }

    function display_user_update($data)
    {
      $this->db->select('*');
      $this->db->like('email', $email);
      $qry = $this->db->get('proprio');
      $rs = $qry->result_array();
      return $rs;
    }


}
