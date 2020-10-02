<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biens_model extends CI_Model
{
  function __construct()
  {
      parent::__construct();
  }



  function insertBiens($data)
  {
      if($this->db->insert('biens', $data))
      {
      return  $this->db->insert_id();
      }
      else
      {
      return false;
      }
  }

  function displayrecords()
{
  $query=$this->db->query("select * from biens join type on biens.id_type = type.id_type where loc_vent=1 order by id_bien");
  return $query->result();
}



}
