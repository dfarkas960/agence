<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruds_model extends CI_Model
{
  function __construct()
  {
      parent::__construct();
  }

  public function proprios_list()
    {
        $query = $this->db->get('proprio');
        return $query->result();
    }


    public function agent_list()
      {
          $query = $this->db->get('agent');
          return $query->result();
      }

      public function biens_list()
        {
            $query = $this->db->get('biens');
            return $query->result();
        }

        public function locataire_list()
          {
              $query = $this->db->get('locataire');
              return $query->result();
          }

          public function voirBiens($Id){
            $query=$this->db->query(
            "select * from biens
             join proprio
             on biens.id_proprio = proprio.id_proprio
            where biens.id_proprio=$Id");
            return $query->result();
          }

        }
        ?>
