<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootgrid extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('bootgrid_model');
 }

 function index()
 {
   $this->load->view('third_party/header');
  $this->load->view('adm/bootgrid');
   $this->load->view('third_party/footer');

 }

 function fetch_data()
 {
  $data = $this->bootgrid_model->make_query();
  $array = array();
  foreach($data as $row)
  {
   $array[] = $row;
  }
  $output = array(
   'current'  => intval($_POST["current"]),
   'rowCount'  => 10,
   'total'   => intval($this->bootgrid_model->count_all_data()),
   'rows'   => $array
  );
  echo json_encode($output);
 }

 function action()
 {
  if($this->input->post('operation'))
  {
   $data = array(

    'id_fonction'   => $this->input->post('id_fonction'),
    'id_role'  => $this->input->post('id_role'),
    'id_contrat'  => $this->input->post('id_contrat'),
    'nom' => $this->input->post('nom'),
    'prenom'   => $this->input->post('prenom'),
    'mail'   => $this->input->post('mail'),
    'date_entree'   => $this->input->post('date_entree'),
    'date_sortie'   => $this->input->post('date_sortie'),
    'login'   => $this->input->post('login'),
    'photo'   => $this->input->post('photo')

   );
   if($this->input->post('operation') == 'Add')
   {
    $this->bootgrid_model->insert($data);
    echo 'Données ajoutées';
   }
   if($this->input->post('operation') == 'Edit')
   {
    $this->bootgrid_model->update($data, $this->input->post('id_identite'));
    echo 'Membre Modifié';
   }
  }
 }

 function fetch_single_data()
 {
  if($this->input->post('id_identite'))
  {
   $data = $this->bootgrid_model->fetch_single_data($this->input->post('id_identite'));
   foreach($data as $row)
   {
    $output['id_fonction'] = $row['id_fonction'];
    $output['id_role'] = $row['id_role'];
    $output['id_contrat'] = $row['id_contrat'];
    $output['nom'] = $row['nom'];
    $output['prenom'] = $row['prenom'];
    $output['mail'] = $row['mail'];
    $output['date_entree'] = $row['date_entree'];
    $output['date_sortie'] = $row['date_sortie'];
    $output['login'] = $row['login'];
    $output['photo'] = $row['photo'];

   }
   echo json_encode($output);
  }
 }

 function delete_data()
 {
  if($this->input->post('id_identite'))
  {
   $this->bootgrid_model->delete($this->input->post('id_identite'));
   echo 'Membre Effacé';
  }
 }
}

?>
