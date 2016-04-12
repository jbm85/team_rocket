<?php $this->layout('layout', ['title' => 'Events - Créer un évenement',
    'id' => 'create_event_page']) ?>

<?php $this->start('principal') ?>
    <!--Contenu principal-->


        <h2>Veuillez indiquer les informations relatives à votre évènement</h2>

        <!--Formulaire de connexion-->
        <form action="#" method="">

            <label for="">Titre :</label>
            <input type="text" id="" name="">

            <label for="">Thème :</label>
            <input type="text" id="" name="">
            <a href="#">Ajouter un autre thème</a>

            <label for="">Date :</label>
            <input type="text" id="" name="">

            <label for="">Description :</label>
            <input type="text" id="" name="">
            <a href="#">Ajouter des photos de présentations (3 au maximum)</a>

            <label for="">Adresse :</label>
            <input type="text" id="" name="">

            <label for="">Ville :</label>
            <input type="text" id="" name="">

            <label for="">Code postal :</label>
            <input type="text" id="" name="">

            <label for="">Capacité :</label>
            <input type="text" id="" name="">

            <label for="">Prix :</label>
            <input type="text" id="" name="">
            <a href="#">Tarifs et modalités liés au frais du site</a>

            <label for="">Public concerné :</label>
            <select name="" id="">
                <option value="all_public">Tous Public</option>
                <option value="major">Adulte</option>
                <option value="female">Féminin</option>
                <option value="male">Masculin</option>
            </select>

            <input type="submit" value="Créer l'évènement">

        </form>
<?php $this->stop('principal') ?>