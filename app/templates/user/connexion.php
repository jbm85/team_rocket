<?php $this->layout('layout', ['title' => 'Events - Connexion',
    'id' => 'connexion_page']) ?>

<?php $this->start('principal') ?>
    <!--Contenu principal-->

        <!--Formulaire de connexion-->
        <form action="#" method="">

            <label for="email-user">Email :</label>
            <input type="text" id="email-user" name="">

            <label for="password-user">Mot de pass :</label>
            <input type="text" id="password-user" name="">
            <a href="#">Oubli de votre mot de pass ?</a>

            <input type="submit" value="Se connecter">

        </form>

<?php $this->stop('principal') ?>
