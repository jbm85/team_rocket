<?php $this->layout('layout',
                    ['title' => 'Events - Connexion', 'id' => 'connexion_page']) ?>
<?php $this->start('principal') ?>
<!--Contenu principal-->

<?php var_dump($coco); ?>
<!--Formulaire de connexion-->
        <form action="<?= $this->url('profil') ?>" method="post">

            <label for="email-user">Email :</label>
            <input type="text" id="email-user" name="email" onblur="checkEmail(this)">

            <label for="password-user">Mot de pass :</label>
            <input type="text" id="password-user" name="mdp" onblur="checkPassword(this)">
            <a href="#">Oubli de votre mot de pass ?</a>

            <input type="submit" name='envoi-connexion' value="Se connecter">

        </form>

<?php $this->stop('principal') ?>
