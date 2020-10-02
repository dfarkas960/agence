<body>



<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Inscription</h2>
        </div>
    </div>

    <div class="row">

        <?php
        echo validation_errors();

        if(! empty($errorMsg))
        {
            echo '<div class="error-msg">';
            echo $errorMsg;
            echo '</div>';
            unset($errorMsg);
        }
        ?>

        <form action="registerUser" method="post">
          <div class="form-group custom-bottom-margin">
              <label class="control-label col-sm-4 text-right" for="nom">Nom</label>
              <div class="col-sm-5">
                  <input type="text" name="nom" class="form-control" value="<?php echo set_value('nom'); ?>" placeholder="Entrez votre nom" id="nom">
              </div>
          </div>
          <div class="form-group custom-bottom-margin">
              <label class="control-label col-sm-4 text-right" for="prenom">Prénom</label>
              <div class="col-sm-5">
                  <input type="text" name="prenom" class="form-control" value="<?php echo set_value('prenom'); ?>" placeholder="Entrez votre prénom" id="prenom">
              </div>
          </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="login">Login</label>
                <div class="col-sm-5">
                    <input type="text" name="login" class="form-control" value="<?php echo set_value('login'); ?>" placeholder="Entrez votre Login" id="login">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="Entrez password" id="password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="confirm_password">Confirmer password</label>
                <div class="col-sm-5">
                    <input type="password"  name="confirm_password" class="form-control" value="<?php echo set_value('confirm_password');?>" placeholder="Confirmez password" id="confirm_password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Entrez email" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
              <label class="control-label col-sm-4 text-right" for="id_fonction">Votre fonction</label>
              <div class="col-sm-5">
                <select name="id_fonction" size="1">
                    <OPTION value=1>data manager
                    <OPTION value=2>développeur web
                    <OPTION value=3>administration
                    <OPTION value=4>direction
                </select>
            </div>
          </br>
        </br>
            <div class="form-group custom-bottom-margin">

                <div class="col-sm-12" align="center">
                    <button class="btn btn-primary" type="submit"> Envoyer</button>
                </div>
            </div>


        </form>
    </div>
</div>

</body>
