<?php $this->layout('layout',
                    ['title' => 'Events - Connexion', 'id' => 'connexion_page']) ?>
<?php $this->start('principal') ?>
<!--Contenu principal-->

<!--Formulaire de connexion-->

<form method="post" action="<?= $this->url('connexion') ?>" id="sky-form6" class="sky-form" >

    <h2>Connexion</h2>
    <?php if (!empty($msg)) {
         echo $msg;
    }
    ?>
    <fieldset>
        <section>
            <label class="input">
                <i class="icon-append fa fa-user"></i>
                <input type="email" name="email" placeholder="Votre Email">
                <b class="tooltip tooltip-bottom-right">Pour vous reconnaitre</b>
            </label>
        </section>

        <section>
            <label class="input">
                <i class="icon-append fa fa-lock"></i>
                <input type="password" id="password-user" name="mdp" placeholder="Votre mot de passe">
                <b class="tooltip tooltip-bottom-right">Le mot de passe lié à votre Email</b>
            </label>
        </section>
    </fieldset>
    <section>
        <a href="#" class="btn btn-primary active" name="envoi-connexion" role="button">Se connecter</a>
    </section>
</form>

<?php $this->stop('principal') ?>
