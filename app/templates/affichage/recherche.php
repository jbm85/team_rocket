<?php $this->layout('layout', ['title' => 'Events - Recherche',
    'id' => 'search_page',]) ?>
<?php $this->start('principal') ?>

        <!--Formulaire de recherche-->

        <form method="post" action="" id="sky-form7" class="sky-form" >
            <h2>Formulaire de Recherche</h2>

            <fieldset>
                <section>
                    <label class="select">
                        <select id="theme-search" name="theme-search">
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
                        <input type="text" name="city-search" id="city-search" placeholder="Recherche par Ville">
                        <b class="tooltip tooltip-bottom-right">Ex: Paris, Lille, Caen</b>
                    </label>
                </section>
                <div class="row">
                <section class="input-group date col col-6" id="sandbox-container">
                    <label class="input">
                        <input type="text"  id="date-search" name="date-search" class="form-control datepicker" placeholder="Recharche par date"></label><span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
                </section>
                    </div>
                </fieldset>

            <section>
                <a href="#" class="btn btn-primary active" name="rechercher" role="button">Rechercher</a>
                </section>
            </form>

        <div id="search-result">
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
        </div>
<?php $this->stop('principal') ?>
