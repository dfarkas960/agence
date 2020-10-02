Pour afficher une mosaique des biens immobiliers en location j'ai fait ce script qui fonctionne:

Voir:     https://noframe.dev.accatone.net/assistants/Dfarkas/agence/home/all_location

J'ai introduit un petit form car je veux ensuite utiliser pour chaque bien son id_bien pour afficher
toutes ses informations dans une autre page controller single_location.

la valeur est transmise en hidden.


<?php
foreach($data as $row)
{ ?>

  <section>
  <?php $bien=$row->id_bien ?>
  <div class="col-4 col-12-small">
  <div class="mini-posts">
  <article class="mini-post">
  <header>
  <h4><?= $row->type ?></a></h4>
  <h3><?= $row->ville ?></h3>
  <time class="published" datetime="2015-10-20">Publié le :<?=$row->date ?></time>
  <h4>la surface totale est de: <?= $row->surface ?> m2</h4>
  <form name="myform" id="myform" action="<?=base_url('home/single_location') ?>" method="post">
  <input type="hidden" name="id" id="id" value="<?=$bien ?>" />
  <input type="submit" value="Voir détails" />
  </form>
  </header>

  <img src="<?=base_url('assets/images/').$row->id_photo ?>" class="responsive">


  </article>
  </div>
  </div>
  </section>
<?php  }
 ?>

 Je ne sais pas comment récupérer cette valeur dans la fonction single_location du controller :

 public function single_location()
 {
   $biens = $this->input->post("id");
   $results['data']=$this->home_model->display_locat($biens);
   $this->load->view('single_location',$results);
 }

 ne semble pas fonctionner car mon model déconne aussi:

 function display_locat($biens)
 {

 $query=$this->db->query('select * from biens join type on biens.id_type = type.id_type where id_bien=$biens');
 return $query->result();
 }


 tu peux me faire une suggestion, stp?
