<?php $this->layout('layout', ['title' => 'Events - Derniers évenements',
    'id' => 'last_events_page',]) ?>
<?php $this->start('principal') ?>
        <h2>Vos évènements et vos avis</h2>
        <!--Presentation des evenements-->
<?php foreach($derniers_evenements as $key => $value) : ?>
        <section>

            <h3><?= $value['titre'] ?></h3>

            <div class="last_events_img"><img src="<?= $this->assetUrl('img/' . $value['photo_1']) ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/' . $value['photo_2']) ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/' . $value['photo_3']) ?>" alt="description de l'evenement"></div>

            <p>Date de l'évènement : <?= $value['date'] ?></p>
            <p>Nombre de places maximum : <?= $value['capacite'] ?></p>
            <p>Description de l'évènement : <?= $value['descriptif'] ?></p>
            <p>Nombre de participants actuels : <?= $value['nb_participants'] ?></p>
            <p>Adresse : <?= $value['adresse'] ?></p>
            <p>Ville : <?= $value['ville'] ?></p>
            <p>Code postal : <?= $value['code_postal'] ?></p>

            <a href="<?= $this->url('evenement_description'); ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>
<?php endforeach; ?>
<?php $this->stop('principal') ?>