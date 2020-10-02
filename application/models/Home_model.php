<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }



    function display_locations()
     {
       $query=$this->db->query("select * from biens join type on biens.id_type = type.id_type where loc_vent=1 order by date");
       return $query->result();
     }

     function display_ventes()
    {
     $query=$this->db->query("select * from biens join type on biens.id_type = type.id_type where loc_vent=2 order by date");
     return $query->result();
    }

    function display_locat()
    {

    $query=$this->db->query('select * from biens join type on biens.id_type = type.id_type');
    return $query->result();
    }

   function display_vent()
    {
   $query=$this->db->query("select * from biens where loc_vent=2 order by date");
   return $query->result();
    }

    function adm_tous()
   {
    $query=$this->db->query("select * from biens order by date");
    return $query->result();
   }



  }

  ?>
