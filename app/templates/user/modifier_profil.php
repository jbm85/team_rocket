<?php $this->layout('layout', ['title' => 'Events - Connexion', 'id' => 'profil_modif']) ?>

<?php $this->start('principal') ?>
<div class="container" style="padding-top: 60px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center" id="previewImage">
        <img src="img/greenlantern.jpg" class="avatar img-circle img-thumbnail" width="200px" height="200px" alt="photo profil">
      </div>
        <p>Modifier la photo profil</p>
        <input type="file" class="text-center center-block well well-sm">
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h2>Mettez à jour vos informations personnelles</h2>
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
            <input class="btn btn-primary" value="Sauvegarder" type="button">
            <span></span>
            <input class="btn btn-default" value="Annuler" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>

    <input class="btn btn-primary" value="Ajouter un événement" type="button">
  </div>
</div>

<?php $this->stop('principal') ?>