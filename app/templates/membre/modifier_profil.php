<?php $this->layout('layout', ['title' => 'Events - Connexion', 'id' => 'profil_modif']) ?>

<?php $this->start('principal') ?>
<div class="container" style="padding-top: 60px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center" id="previewImage">
        <img src="" alt="photo profil" class="img-thumbnail">
      </div>
        <p>Modifier la photo profil</p>
        <input type="file" class="text-center center-block well well-sm">
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <p>Mettez à jour vos informations personnelles</p>
      <form method="post" action="<?= $this->url('modifier_profil') ?>" class="form-horizontal" role="form">

        <div class="form-group">
          <label class="col-lg-3 control-label">Prénom:</label>
          <div class="col-lg-8">
            <input class="form-control" name="prenom" placeholder="Barry" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Nom:</label>
          <div class="col-lg-8">
            <input class="form-control" name="nom" placeholder="Allen" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Date de naissance:</label>
          <div class="col-lg-8">
            <input class="form-control" name="date_de_naissance" placeholder="01/01/1990" type="date">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" name="email" placeholder="barryallen@mail.com" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Téléphone:</label>
          <div class="col-lg-8">
            <input class="form-control" name="telephone" placeholder="0123456789" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Pseudo:</label>
          <div class="col-lg-8">
            <input class="form-control" name="pseudo" placeholder="theflash" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Mot de passe:</label>
          <div class="col-lg-8">
            <input class="form-control" name="mot_de_passe" placeholder="" type="password">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Confirmer le mot de passe:</label>
          <div class="col-lg-8">
            <input class="form-control" name="confirmation" placeholder="" type="password">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="save-cancel">
            <a href="#" name="sauvegarder" class="btn btn-primary btn-lg active" role="button">Sauvegarder</a>
            <a href="#" name="annuler" class="btn btn-default btn-lg active" role="button">Annuler</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <a href="<?= $this->url('creer_evenement') ?>" class="btn btn-primary btn-lg active" role="button">Ajouter un événement</a>
  </div>
</div>

<?php $this->stop('principal') ?>