

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Vous êtes bien connecté</h2>
        </div>
        <br>
        <br>

    </div>

    <div class="row">
        <div class="col-md-12 text-center" >
            <p>Vous pouvez, dés à présent:</p>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 text-center"></div>
            <div class="col-md-3 text-center">
                <button href="/users/evaluation.php">évaluez votre ville</button>
            </div>
            <div class="col-md-3 text-center">
                <button href="/users/evaluation.php">récapituler vos évaluations</button>
            </div>
            <div class="col-md-3 text-center"></div>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" >
            <?php
            if(isset($this->session->email))
            {
                echo '<a href="logout">Déconnectez-vous</a>';
            }
            ?>
        </div>
    </div>
</div>

    </body>
