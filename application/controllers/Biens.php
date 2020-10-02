<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Biens extends CI_Controller {

  public function index(){
      $this->load->view('biens');
  }

 function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation');
  $this->load->model('Biens_model');
 }


 public function registerBiens()
 {
    $this->form_validation->set_rules('loc_vent', 'Loc_vent', 'trim|required');
     $this->form_validation->set_rules('date', 'Date', 'trim|required');
     $this->form_validation->set_rules('description', 'Description', 'trim|required');
     $this->form_validation->set_rules('id_type', 'Id_type', 'trim|required');
     $this->form_validation->set_rules('surface', 'Surface', 'trim|required');
     $this->form_validation->set_rules('ancien', 'Ancien', 'trim|required');
     $this->form_validation->set_rules('pieces', 'Pieces', 'trim|required');
     $this->form_validation->set_rules('parking', 'Parking', 'trim|required');
     $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required');
     $this->form_validation->set_rules('ville', 'Ville', 'trim|required');
     $this->form_validation->set_rules('code_postal', 'Code_postal', 'trim|required');
     $this->form_validation->set_rules('etage', 'Etage', 'trim|required');
     $this->form_validation->set_rules('ascenceur', 'Ascenceur', 'trim|required');
     $this->form_validation->set_rules('localisation', 'Localisation', 'trim|required');
     $this->form_validation->set_rules('id_proprio', 'Id_proprio', 'trim|required');
     $this->form_validation->set_rules('id_locataire', 'Id_locataire', 'trim|required');
     $this->form_validation->set_rules('id_photo', 'Id_photo', 'trim|required');
     $this->form_validation->set_rules('loyer', 'Loyer', 'trim|required');
     $this->form_validation->set_rules('charges', 'Charges', 'trim|required');
     $this->form_validation->set_rules('prix', 'Prix', 'trim|required');
     $this->form_validation->set_rules('actif', 'Actif', 'trim|required');
     $this->form_validation->set_rules('id_agent', 'Id_agent', 'trim|required');


     $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

     if ($this->form_validation->run() == FALSE)
     {
         $this->load->view('biens');
     }
     else
     {
        $loc_vent = $this->security->xss_clean($this->input->post('loc_vent'));
         $date 	= $this->security->xss_clean($this->input->post('date'));
         $description 	= $this->security->xss_clean($this->input->post('description'));
         $id_type = $this->security->xss_clean($this->input->post('id_type'));
         $surface = $this->security->xss_clean($this->input->post('surface'));
         $ancien	= $this->security->xss_clean($this->input->post('ancien'));
         $pieces	= $this->security->xss_clean($this->input->post('pieces'));
         $parking 	= $this->security->xss_clean($this->input->post('parking'));
         $adresse 	= $this->security->xss_clean($this->input->post('adresse'));
         $ville 	= $this->security->xss_clean($this->input->post('ville'));
         $code_postal = $this->security->xss_clean($this->input->post('code_postal'));
         $etage = $this->security->xss_clean($this->input->post('etage'));
         $ascenceur	= $this->security->xss_clean($this->input->post('ascenceur'));
         $localisation	= $this->security->xss_clean($this->input->post('localisation'));
         $id_proprio 	= $this->security->xss_clean($this->input->post('id_proprio'));
         $id_locataire 	= $this->security->xss_clean($this->input->post('id_locataire'));
         $id_photo 	= $this->security->xss_clean($this->input->post('id_photo'));
         $loyer = $this->security->xss_clean($this->input->post('loyer'));
         $charges = $this->security->xss_clean($this->input->post('charges'));
         $prix	= $this->security->xss_clean($this->input->post('prix'));
         $actif	= $this->security->xss_clean($this->input->post('actif'));
         $id_agent	= $this->security->xss_clean($this->input->post('id_agent'));

         $insertData = array(
           'loc_vent'=> $loc_vent,
           'date'=> $date,
           'description' => $description,
           'id_type' => $id_type,
           'surface' => $surface,
           'ancien' => $ancien,
           'pieces' => $pieces,
           'parking' =>$parking,
           'adresse' =>$adresse,
           'ville' =>$ville,
           'code_postal' => $code_postal,
           'etage' => $etage,
           'ascenceur' => $ascenceur,
           'localisation' => $localisation,
           'id_proprio' => $id_proprio,
           'id_locataire' => $id_locataire,
           'id_photo' => $id_photo,
           'loyer' => $loyer,
           'charges' => $charges,
           'prix' => $prix,
           'actif' => $actif,
          'id_agent'=> $id_agent,
            );


             $insertUsers = $this->Biens_model->insertBiens($insertData);

             if($insertUsers)
             {

                 redirect('biens/index');
             }
             else
             {
                 $data['errorMsg'] = 'Impossible d\'enregistrer. Essayez de nouveau, svp';

                 $this->load->view('biens',$data);

             }
         }

     }



}

?>
