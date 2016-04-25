<?php $this->layout('layout',
                    ['title' => 'Events - Connexion', 'id' => 'connexion_page']) ?>
<?php $this->start('principal') ?>
<!--Contenu principal-->

<!--Formulaire de connexion-->

<form method="post" action="<?= $this->url('connexion') ?>" id="sky-form6" class="sky-form" >

    <h2>Connexion</h2>
    <?php if (isset($msg)) : ?>
        <p style="color: red"><?= $msg ?></p>
    <?php endif; ?>
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
                <input type="password" id="password-user" name="mot_de_passe" placeholder="Votre mot de passe">
                <b class="tooltip tooltip-bottom-right">Le mot de passe lié à votre Email</b>
            </label>
        </section>
    </fieldset>
    
    <section>
        <button type="submit" name="envoi-connexion" class="btn btn-primary active">Se connecter</button>
    </section>
    <a href="#" data-toggle="modal" data-target="#resetmdpModal">mot de passe oublié ?</a>
</form>



<div class="modal fade" id="resetmdpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Réinitialisation du mot de passe</h4>
            </div>

            <div class="modal-body">
                <section id="resetmdp">


                        <p>Afin de pouvoir réinitialiser votre mot de passe, vous devez nous fournir votre adresse email : </p>
                        <form method="post" id="sky-form6" class="sky-form">
                            <fieldset>
                                <section>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="email" name="email" placeholder="Votre Email">
                                        <b class="tooltip tooltip-bottom-right">Pour vous reconnaitre</b>
                                    </label>
                                </section>
                            </fieldset>
                            <section>

                                <button type="submit" name="reset-mdp" class="btn btn-primary active">Envoyer</button>

                            </section>
                        </form>







                </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>
<?php $this->stop('principal') ?>
