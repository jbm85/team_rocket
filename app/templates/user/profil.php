<?php $this->layout('layout', ['title' => 'Events - Profil',
    'id' => 'profil_modif']) ?>

<?php $this->start('principal') ?>

<div class="container" style="padding-top: 60px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-profil">
        <div class="text-center" id="previewImage">
          img src="" width="150px" height="150px" alt="photo profil">
        </div>

        <!-- Affichage des informations personnelles -->
        <div class="view-profil-info">
          <ul>
            <li>Pseudo</li>
            <li>Prénom</li>
            <li>nom</li>
            <li>Date de naissance</li>
            <li>Email</li>
            <li>Téléphone</li>
          </ul>

          <input class="btn btn-primary" value="Modifier vos informations personnelles" type="button">

        </div>
      </div>

      <div class="show-events">

        <div class="list-add-events">
          Listes de événements ajoutés
        </div>

          <table class="add-events" data-toggle="modal" data-target="#profil-add-events">
            <tr>
              <th>Date</th>
              <th>Capecité</th>
              <th>Description</th>
              <th>Nombre de participants</th>
            </tr>
            <tr>
              <td>01/01/2012</td>
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
              <th>Capecité</th>
              <th>Description</th>
              <th>Nombre de participants</th>
            </tr>
            <tr>
              <td>01/01/2012</td>
              <td>100</td>
              <td>Spectacle</td>
              <td>70</td>
            </tr>
          </table>

          <input class="btn btn-primary" value="Ajouter un événement" type="button">
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
                  <th>Capecité</th>
                  <th>Description</th>
                  <th>Nombre de participants</th>
                </tr>
                <tr>
                  <td>01/01/2012</td>
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
                          <th>Capecité</th>
                          <th>Description</th>
                          <th>Nombre de participants</th>
                        </tr>
                        <tr>
                          <td>01/01/2012</td>
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