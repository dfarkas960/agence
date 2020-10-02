
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Connexion</h2>
        </div>
    </div>

    <div class="row text-center">

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

        <form action="loginUser" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Enter email" id="email">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="Enter password" id="password">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit"> Envoyer</button>
                </div>
            </div>


        </form>
    </div>
</div>
</div>




</body>
