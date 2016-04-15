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
      <form class="form-horizontal" role="form">

        <div class="form-group">
          <label class="col-lg-3 control-label">Prénom:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="Barry" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Nom:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="Allen" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Date de naissance:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="01/01/1990" type="date">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="barryallen@mail.com" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Téléphone:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="0123456789" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Pseudo:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="theflash" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Mot de passe:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="" type="password">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Confirmer le mot de passe:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="" type="password">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="save-cancel">
            <a href="#" class="btn btn-primary btn-lg active" role="button">Sauvegarder</a>
            <a href="#" class="btn btn-default btn-lg active" role="button">Annuler</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <a href="<?= $this->url('creer_evenement') ?>" class="btn btn-primary btn-lg active" role="button">Ajouter un événement</a>
  </div>
</div>

<?php $this->stop('principal') ?>