<?php $this->layout('layout', ['title' => 'Events - Modification du profil', 'id' => 'profil_modif']) ?>

<?php $this->start('principal') ?>

<div class="container" style="padding-top: 60px;">

  <?php if (isset($msg)) : ?>
    <p class="message_erreur"><?= $msg ?></p>
  <?php endif; ?>
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <form method="post" action="<?= $this->url('modifier_profil') ?>" enctype="multipart/form-data" class="form-horizontal" role="form">
      <div class="text-center" id="previewImage">
        <?php if (!empty($_SESSION['user']['photo_profil'])) : ?>
          <img src="<?= $this->assetUrl('img/photo_profil/' . $_SESSION['user']['photo_profil']) ?>" alt="photo profil" class="img-thumbnail">
        <?php else: ?>
          <p>No photo</p>
        <?php endif; ?>
      </div>
        <p>Modifier la photo profil (Poids : 2Mo max et format pris en charge : jpg, jpeg, png ou gif) :</p>
        <input type="file" class="text-center center-block well well-sm" name="photo">
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <p>Mettez à jour vos informations personnelles</p>

        <div class="form-group">
          <label class="col-lg-3 control-label">Prénom:</label>
          <div class="col-lg-8">
            <input class="form-control" name="prenom" placeholder="Barry" type="text" value="<?= !empty($_SESSION['user']['prenom']) ? $_SESSION['user']['prenom'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Nom:</label>
          <div class="col-lg-8">
            <input class="form-control" name="nom" placeholder="Allen" type="text" value="<?= !empty($_SESSION['user']['nom']) ? $_SESSION['user']['nom'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Date de naissance:</label>
          <div class="col-lg-8">
            <input class="form-control" name="date_de_naissance" placeholder="01/01/1990" type="date" value="<?= !empty($_SESSION['user']['date_de_naissance']) ? $_SESSION['user']['date_de_naissance'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" name="email" placeholder="barryallen@mail.com" type="email" value="<?= !empty($_SESSION['user']['email']) ? $_SESSION['user']['email'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Téléphone:</label>
          <div class="col-lg-8">
            <input class="form-control" name="telephone" placeholder="0123456789" type="text" value="<?= !empty($_SESSION['user']['telephone']) ? $_SESSION['user']['telephone'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Pseudo:</label>
          <div class="col-lg-8">
            <input class="form-control" name="pseudo" placeholder="theflash" type="text" value="<?= !empty($_SESSION['user']['pseudo']) ? $_SESSION['user']['pseudo'] : ''?>">
          </div>
        </div>

        <div class="form-group">
          <!-- <label class="col-md-3 control-label"></label> -->
          <div class="save-cancel">
            <button type="submit" name="sauvegarder" class="btn btn-primary btn-lg active">Sauvegarder</button>
            <button type="submit" name="annuler" class="btn btn-primary btn-lg active">Annuler</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <a href="<?= $this->url('creer_evenement') ?>" class="btn btn-primary btn-lg active" role="button">Ajouter un événement</a>

  <a href="#" data-toggle="modal" data-target="#resetmdpModal">Envie de changer de mot de passe ?</a>
  </div>
</div>

<?php $this->stop('principal') ?>