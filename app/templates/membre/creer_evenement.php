<?php $this->layout('layout', ['title' => 'Events - Connexion', 'id' => 'create_event_page']) ?>

<?php $this->start('principal') ?>
    <!--Contenu principal-->

    <form method="post" action="#" id="sky-form5" class="sky-form" >
        <h2>Ajouter un évenement</h2>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append"></i>
                    <input type="text" name="titre" placeholder="Titre de votre évenement">
                    <b class="tooltip tooltip-bottom-right">Optionnel</b>
                </label>
            </section>

            <section>
                <label class="select">
                <select name="theme" id="theme">
                    <option value="sport">Sport</option>
                    <option value="musique">Musique</option>
                    <option value="spectacle">Spectacle</option>

                </select>
                <i></i>
                </label>
            </section>

            <section>
                <label class="select">
                    <select name="public" id="public">
                        <option value="all_public">Tous Public</option>
                        <option value="major">Adulte</option>
                        <option value="female">Féminin</option>
                        <option value="male">Masculin</option>
                    </select>
                    <i></i>
                </label>
            </section>

            <section>
                <label class="textarea">
                    <i id="descriptionE" class="icon-append fa fa-info"></i>
                    <textarea type="text" name="descriptif" placeholder="Description de l'évenement"></textarea>
                    <b class="tooltip tooltip-bottom-right">Décrivez votre évenement, pour attirer des participants</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-road"></i>
                    <input type="text" name="adresse" placeholder="Rue, Avenue...">
                    <b class="tooltip tooltip-bottom-right">Ex: 3 rue des zoubi</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-building-o"></i>
                    <input type="text" name="ville" placeholder="Ville">
                    <b class="tooltip tooltip-bottom-right">Ex: Paris, Lille, Caen</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="text" name="code_postal" placeholder="Code postal">
                    <b class="tooltip tooltip-bottom-right">Ex: 75020</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <div class="row">

                <section class="col col-6">
                    <label class="input">
                        <i class="icon-append fa fa-users"></i>
                        <input type="text" name="capacite" placeholder="Capacité">
                        <b class="tooltip tooltip-bottom-right">Nombre de personne attendu</b>
                    </label>
                </section>

                <section class="col col-6">
                    <label class="input">
                        <i class="icon-append fa fa-money"></i>
                        <input type="text" name="prix" placeholder="Prix d'une entrée">
                        <b class="tooltip tooltip-bottom-right">En euros d'une unique entrée</b>
                    </label>
                </section>

                <section class="input-group date col col-6" id="sandbox-container">
                    <label class="input">

                        <input type="text"  name="date_debut" class="form-control datepicker" placeholder="Date début evenement">

                        <b class="tooltip tooltip-bottom-right"></b>
                    </label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
                </section>

                <section class="col col-6 clockpicker">
                    <label class="input">
                        <i class="icon-append fa fa-clock-o"></i>
                    <input type="text" name="heure_debut" class="form-control" value="09:30">
                        <b class="tooltip tooltip-top-right">A quelle heure on vient ?</b>
                    </label>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </section>

                <section class="input-group date col col-6" id="sandbox-container">
                    <label class="input">

                        <input type="text"  name="date_fin" class="form-control datepicker" placeholder="Date fin evenement">

                        <b class="tooltip tooltip-bottom-right"></b>
                    </label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
                </section>

                <section class="col col-6 clockpicker">
                    <label class="input">
                        <i class="icon-append fa fa-clock-o"></i>
                        <input type="text" name="heure_fin" class="form-control" value="09:30">
                        <b class="tooltip tooltip-top-right">A quelle heure on part ?</b>
                    </label>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </section>


            </div>



            <section>
                <label class="input" for="photo">
                    <i class="icon-append fa fa-camera"></i>
                    <input type="file" id="uploadFile1" name="photo_1" placeholder="Première photo">
                </label>
            </section>
            <section id="sectionPhotoEvent1" class="preview">

            </section>

            <section>
                <label class="input" for="photo">
                    <i class="icon-append fa fa-camera"></i>
                    <input type="file" id="uploadFile2" name="photo_2" placeholder="Deuxième photo">
                </label>
            </section>
            <section id="sectionPhotoEvent2" class="preview">

            </section>

            <section>
                <label class="input" for="photo">
                    <i class="icon-append fa fa-camera"></i>
                    <input type="file" id="uploadFile3" name="photo_3" placeholder="Troisième photo">
                </label>
            </section>
            <section id="sectionPhotoEvent3" class="preview">

            </section>

        </fieldset>
        <section>
            <button type="submit" name="envoi-evenement" class="btn-u">Envoyer</button>
        </section>
    </form>

<?php $this->stop('principal') ?>