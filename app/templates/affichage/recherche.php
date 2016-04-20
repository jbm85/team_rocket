<?php $this->layout('layout', ['title' => 'Events - Recherche',
    'id' => 'search_page',]) ?>
<?php $this->start('principal') ?>

        <!--Formulaire de recherche-->
        <form action="<?php $this->url('recherche') ?>" method="post">
            <label for="theme-search">Recherche par thème :</label>
            <input type="text" id="theme-search" name="theme">

            <label for="date-search">Recherche par date :</label>
            <input type="text" id="date-search" name="date">

            <label for="city-search">Recherche par ville :</label>
            <input type="text" id="city-search" name="ville">

            <input type="submit" value="Rechercher" name="envoi-recherche">

        </form>

        <h2>Résultats de votre recherche :</h2>
        <em>Nous avons trouvé 4 correspondances pour votre recherche.</em>
        <!--Presentation des evenements-->
        <section>
            <h3>Titre de l'évenement 1</h3>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 2</h3>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 3</h3>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <section>
            <h3>Titre de l'évenement 4</h3>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img1.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img2.jpg') ?>" alt="description de l'evenement"></div>
            <div class="search_img"><img src="<?= $this->assetUrl('img/evenement2_img3.jpg') ?>" alt="description de l'evenement"></div>
            <p>Date</p>
            <p>Capacite</p>
            <p>Description</p>
            <p>Nombre de participants</p>
            <a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
            <a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
            <a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
        </section>

        <a href="<?= $this->url("recherche"); ?>" title="nouvelle recherche" class="btn btn-primary active">Nouvelle recherche</a>
<?php $this->stop('principal') ?>
