<?php $this->layout('layout', ['title' => 'Events - Recherche',
    'id' => 'search_page']) ?>

<?php $this->start('principal') ?>

<?php if(!empty($search_results)){
    $nb_search = count($search_results);
}else{
    $search_results = '';
}
     ?>


        <form method="post" action="" id="sky-form7" class="sky-form" >
            <h2>Formulaire de Recherche</h2>
            <?php if (isset($msg)) :
                        echo $msg;
            endif;
            ?>
            <fieldset>
                <section>
                    <label class="select">
                        <select id="theme-search" name="theme">
                            <option value="0" selected disabled>Recherche par thème</option>
                            <option value="sport">Sport</option>
                            <option value="musique">Musique</option>
                            <option value="spectacle">Spectacle</option>
                        </select>
                        <i></i>
                    </label>
                </section>

                <section>
                    <label class="input">
                        <i class="icon-append fa fa-building-o"></i>
                        <input type="text" name="ville" id="city-search" placeholder="Recherche par Ville">
                        <b class="tooltip tooltip-bottom-right">Ex: Paris, Lille, Caen</b>
                    </label>
                </section>


                    <section class="input-group date" id="sandbox-container">
                        <label class="input">
                            <input type="text" placeholder="Rechercher par date : 12/08/1987" id="date-search" name="date" class="form-control datepicker" placeholder="Recharche par date"></label><span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
                    </section>
              
            </fieldset>

            <section>
                <button class="btn btn-primary active" name="envoi-recherche" type="submit">Rechercher</button>
            </section>
        </form>
    <?php if (!empty($nb_search) && $nb_search>0) : ?>
        <div id="search-result">
            <h2>Résultats de votre recherche :</h2>
            <em>Nous avons trouvé <strong><?= $nb_search ?></strong> correspondances pour votre recherche.</em>
            <!--Presentation des evenements-->
            <?php foreach($search_results as $key => $value) :?>
            <section>
                <!--Affichage du titre de l'évenement-->
                <h3><?= $value['titre'] ?></h3>

                <!--Affichage des photos de l'évenement-->
                <?php if (!empty($value['photo_1'])) : ?>
                    <div class="index_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $value['photo_1']) ?>" alt="description de l'evenement"></div>
                <?php endif; ?>

                <?php if (!empty($value['photo_2'])) : ?>
                    <div class="index_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $value['photo_2']) ?>" alt="description de l'evenement"></div>
                <?php endif; ?>

                <?php if (!empty($value['photo_3'])) : ?>
                    <div class="index_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $value['photo_3']) ?>" alt="description de l'evenement"></div>
                <?php endif; ?>

                <!--Affichage de la date et les horaires de l'évenement-->
                <p>Date de l'évènement : <strong><?= $value['date'] ?></strong> de <strong><?= $value['heure_debut'] ?></strong> à <strong><?= $value['heure_fin'] ?></strong></p>

                <!--Affichage de la capacité maximale de l'évenement-->
                <p>Le nombre maximum de personnes pour cet évènement est de <strong><?= $value['capacite'] ?></strong> personne<?= ($value['capacite']) > 1 ? 's' : '' ?>.</p>

                <!--Description de l'évenement-->
                <p>Description de l'évènement : <strong><?= $value['descriptif'] ?></strong></p>

                <!--Nombre de participants à l'évènement en cours-->
                <p>Il y a, à l'heure actuel, <strong><?= $value['nb_participants'] ?></strong> participant(e)<?= ($value['nb_participants']) > 1 ? 's' : '' ?> pour cet évènement.</p>

                <!--Liens d'interactions (details, inscription, participation)-->
                <a href="<?= $this->url('evenement_description',  ['id' => $value['id']]); ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
                <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
                <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>

            </section>
            <?php endforeach; ?>


            <a href="<?= $this->url("recherche"); ?>" title="nouvelle recherche" class="btn btn-primary active">Nouvelle recherche</a>
        </div>
        <?php endif; ?>


<?php $this->stop('principal') ?>
