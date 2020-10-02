<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents_model extends CI_Model
{
  function __construct()
  {
      parent::__construct();
  }

  function checkDuplicate($email)
  {
      $this->db->select('email');
      $this->db->from('agent');
      $this->db->like('email', $email);
      return $this->db->count_all_results();
  }

  function insertAgents($data)
  {
      if($this->db->insert('agent', $data))
      {
      return  $this->db->insert_id();
      }
      else
      {
      return false;
      }
  }

  function agentsExist($email)
  {
      $this->db->select('*');
      $this->db->like('email', $email);
      $qry = $this->db->get('agent');
      $rs = $qry->result_array();
      return $rs[0];
  }

  
}
?>
