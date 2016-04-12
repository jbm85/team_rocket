<?php $this->layout('layout', ['title' => 'Events - Profil',
    'id' => 'profil']) ?>

<?php $this->start('principal') ?>

<div class="container" style="padding-top: 60px;">
  
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center" id="previewImage">
        <img src="" class="avatar img-circle img-thumbnail" width="200px" height="200px" alt="photo profil">
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
        <button>Modifier vos informations personnelles</button>
      </ul>
      
    </div>

  <div class="show-events">

    <div class="list-add-events">
      Listes de événements ajoutés
    </div>

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

    <div class="list-past-events">
      Listes de événements participés
    </div>
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

    <input class="btn btn-primary" value="Ajouter un événement" type="button">
  </div>
</div>
<?php $this->stop('principal') ?>