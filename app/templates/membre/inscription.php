<?php $this->layout('layout', ['title' => 'Events - Connexion', 'id' => 'inscription_page']) ?>

<?php $this->start('principal') ?>
<?php debug($utilisateur) ?>
    <form method="post" action="<?= $this->url('inscription') ?>" id="sky-form4" class="sky-form" >
        <h2>Formulaire d'inscription</h2>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="pseudo" placeholder="Votre Pseudo">
                    <b class="tooltip tooltip-bottom-right">Pour vous reconnaitre</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Votre Email">
                    <b class="tooltip tooltip-bottom-right">Pour vous contacter et vous connecter</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-phone"></i>
                    <input type="text" name="telephone" placeholder="Votre numéro de téléphone">
                    <b class="tooltip tooltip-bottom-right">Optionnel</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" id="password">
                    <b class="tooltip tooltip-bottom-right">N'oubliez pas votre mot de passe</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="passwordConfirm" placeholder="Confirmer votre mot de passe">
                    <b class="tooltip tooltip-bottom-right">N'oubliez pas votre mot de passe</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="prenom" placeholder="Votre prenom">
                    </label>
                </section>
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="nom" placeholder="Votre nom">
                    </label>
                </section>
            
            <section class="input-group date col col-6" id="sandbox-container">
            <label class="input">
                <input type="text"  name="date_de_naissance" class="form-control datepicker" placeholder="Votre date de naissance"></label><span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
            </section>
            </div>
            
            <section>
                <label class="select">
                    <select name="gender">
                        <option value="0" selected disabled>Genre</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                    </select>
                    <i></i>
                </label>
            </section>

            <section>
                <label class="input" for="photo">
                    <i class="icon-append fa fa-camera"></i>
                    <input type="file" id="uploadFile" name="photo" placeholder="Votre photo">
                </label>
            </section>
            <section id="sectionPhotoProfil" class="preview">
                
            </section>

        </fieldset>
        <section>
            <button type="submit" name="submit" class="btn-u">Envoyer</button>
        </section>
    </form>
<?php $this->stop('principal') ?>