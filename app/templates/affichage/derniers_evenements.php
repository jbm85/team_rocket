<?php $this->layout('layout', ['title' => 'Events - Derniers évenements',
    'id' => 'last_events_page',]) ?>
<?php $this->start('principal') ?>
        <h2>Vos évènements et vos avis</h2>
        <?php var_dump($derniers_evenements) ?>
        <!--Presentation des evenements-->
        <section>
            <h3>Titre de l'évenement 1</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 2</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 3</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 4</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 5</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 6</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 7</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 8</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 9</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 10</h3>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="last_events_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <p>Dernier avis</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>
<?php $this->stop('principal') ?>