<?php $this->layout('layout', ['title' => 'Events - Profil',
    'id' => 'profil_modif']) ?>

<?php $this->start('principal') ?>

<?php debug($_SESSION['user']) ?>
<div class="container" style="padding-top: 60px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-profil">

        <div class="text-center" id="previewImage">
          <?php if (!empty($_SESSION['user']['photo_profil'])) : ?>
          <img src="<?= $this->assetUrl('img/' . $_SESSION['user']['photo_profil']) ?>" alt="photo profil" class="img-thumbnail">
          <?php else: ?>
          <p>No photo</p>
          <?php endif; ?>
        </div>


        <!-- Affichage des informations personnelles -->
        <div class="view-profil-info">
          <ul>
            <li>Votre pseudo : <strong><?= $_SESSION['user']['pseudo']; ?></strong></li>
            <li>Prénom : <strong><?= $_SESSION['user']['prenom']; ?></strong></li>
            <li>Nom : <strong><?= $_SESSION['user']['nom']; ?></strong></li>
            <li>Date de naissance : <strong><?= $_SESSION['user']['date_de_naissance']; ?></strong></li>
            <li>Votre adresse email : <strong><?= $_SESSION['user']['email']; ?></strong></li>
            <li>Votre numéro de téléphone : <strong><?= $_SESSION['user']['telephone']; ?></strong></li>
          </ul>
          <a href="<?= $this->url('modifier_profil') ?>" class="btn btn-primary btn-lg active" role="button">Modifiez vos informations personnelles</a>
        </div>
      </div>

      <div class="show-events">

        <div class="list-add-events">
          Listes de événements ajoutés
        </div>

          <table class="add-events" data-toggle="modal" data-target="#profil-add-events">
            <tr>
              <th>Date</th>
              <th>Lieu</th>
              <th>Capecité</th>
              <th>Description</th>
              <th>Nombre de participants</th>
            </tr>
            <tr>
              <td>01/01/2012</td>
              <td>Paris</td>
              <td>100</td>
              <td>Spectacle</td>
              <td>70</td>
            </tr>
          </table>

        <div class="list-past-events">
          Listes de événements participés
        </div>

          <table class="past-events" data-toggle="modal" data-target="#profil-past-events">
            <tr>
              <th>Date</th>
              <th>Lieu</th>
              <th>Capecité</th>
              <th>Description</th>
              <th>Nombre de participants</th>
            </tr>
            <tr>
              <td>01/01/2012</td>
              <td>Paris</td>
              <td>100</td>
              <td>Spectacle</td>
              <td>70</td>
            </tr>
          </table>

          <a href="<?= $this->url('creer_evenement') ?>" class="btn btn-primary btn-lg active" role="button">Ajouter un événement</a>
        </div>
      </div>
    </div>

    <div class="modal fade" id="profil-add-events" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
          <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Liste des événements ajoutés</h4>
          </div>
          <div class="modal-body">
            <section>
              <table class="add-events">
                <tr>
                  <th>Date</th>
                  <th>Lieu</th>
                  <th>Capecité</th>
                  <th>Description</th>
                  <th>Nombre de participants</th>
                </tr>
                <tr>
                  <td>01/01/2012</td>
                  <td>Paris</td>
                  <td>100</td>
                  <td>Spectacle</td>
                  <td>70</td>
                </tr>
              </table>
            </section>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
           </div>
          </div>
        </div>
      </div>

            <div class="modal fade" id="profil-past-events" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content" >
                  <div class="modal-header" >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Liste des événements participés</h4>
                  </div>
                  <div class="modal-body">
                    <section>
                      <table class="past-events">
                        <tr>
                          <th>Date</th>
                          <th>Lieu</th>
                          <th>Capecité</th>
                          <th>Description</th>
                          <th>Nombre de participants</th>
                        </tr>
                        <tr>
                          <td>01/01/2012</td>
                          <td>Paris</td>
                          <td>100</td>
                          <td>Spectacle</td>
                          <td>70</td>
                        </tr>
                      </table>
                    </section>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php $this->stop('principal') ?>