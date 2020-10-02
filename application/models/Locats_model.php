<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locats_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function checkDuplicate($email)
    {
        $this->db->select('email');
        $this->db->from('locataire');
        $this->db->like('email', $email);
        return $this->db->count_all_results();
    }

    function insertLocats($data)
    {
        if($this->db->insert('locataire', $data))
        {
        return  $this->db->insert_id();
        }
        else
        {
        return false;
        }
    }

    function modifieLocat($data,$email)
    {

        $this->db->set($data);
        $this->db->where('email', $email);
        $this->db->update('locataire');
    }

    function locatsExist($email)
    {
        $this->db->select('*');
        $this->db->like('email', $email);
        $qry = $this->db->get('locataire');
        $rs = $qry->result_array();
        return $rs[0];
    }



}
