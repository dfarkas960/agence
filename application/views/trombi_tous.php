
  <?php
  foreach($data as $row)
  {
    echo '<div class="col-sm-4 col-lg-2 col-md-2">';
    echo '<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:280px; text-align:center; background-color:white;">';
    echo '<img src="'.base_url().'assets/img/vis/'. $row->photo.'" class="responsive">';
    echo '<h4><strong><a href="#">'. strtoupper($row->nom) .'</a></strong></h4>';
    echo  '<h4  class="text-danger" >'. $row->prenom .'</h4>';
    echo '<p>ID N° : '. $row->id_identite.' <br />';
    echo '</div>';
    echo '</div>';
  }
   ?>


</body>
