


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

        if(isset($errorMsg))
        {
            echo '<div class="error-msg">';
            echo $errorMsg;
            echo '</div>';
            unset($errorMsg);
        }
        ?>

        <form action="RegisterUser" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="pseudo">Pseudo</label>
                <div class="col-sm-5">
                    <input type="text" name="pseudo" class="form-control" value="<?php echo set_value('pseudo'); ?>" placeholder="Entrez votre Pseudo" id="pseudo">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Entrez email" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="Enter password" id="password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="confirm_password">Confirm password</label>
                <div class="col-sm-5">
                    <input type="password"  name="confirm_password" class="form-control" value="<?php echo set_value('confirm_password');?>" placeholder="Confirmer password" id="confirm_password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
              <label class="control-label col-sm-4 text-right" for="confirm_password">Confirm password</label>
              <div class="col-sm-5">
                <select name="id_fonction" size="1">
                    <OPTION value=1>data manager
                    <OPTION value=2>développeur web
                    <OPTION value=3>administration
                    <OPTION value=4>direction
                </select>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit"> Submit</button>
                </div>
            </div>


        </form>
    </div>
</div>

</body>
