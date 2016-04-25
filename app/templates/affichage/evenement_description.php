<?php $this->layout('layout', ['title' => 'Events - Evenements', 'id' => 'event_description_page']) ?>

<?php $this->start('principal') ?>
<?php  debug($details_evenement) ?>
	<section>
		<h3><?= $details_evenement['titre'] ?> </h3>
		<div class="profil_detail_img"><img src="<?= $this->assetUrl('img/theflash.jpg') ?>" alt="photo de profil"></div>


		<ul>
			<li>Date de début : <strong><?= $details_evenement['date_debut'] ?></strong> à <strong><?= $details_evenement['heure_debut'] ?></strong></li>
			<li>Date de fin : <strong><?= $details_evenement['date_fin'] ?></strong> à <strong><?= $details_evenement['heure_fin'] ?></strong></li>
			<li>Description : <strong><?= $details_evenement['descriptif'] ?></strong></li>
			<li>Type de public concerné : <strong><?= $details_evenement['public'] ?></strong></li>
			<li>Localisation : <strong id="geocode_loc"><?= $details_evenement['adresse'] ?> <?= $details_evenement['ville'] ?> <?= $details_evenement['code_postal'] ?></strong></li>
		</ul>

		<!--Affichage des photos de l'évenement-->
		<article>

			<?php if (!empty($details_evenement['photo_1'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $details_evenement['photo_1']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

			<?php if (!empty($details_evenement['photo_2'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $details_evenement['photo_2']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

			<?php if (!empty($details_evenement['photo_3'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/photo_evenement/'. $details_evenement['photo_3']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

		</article>


		<!-- google map view -->
		<div id="map"></div>

	</section>

	<a href="#" class="btn btn-primary active" role="button">Participer à l'évènement</a>

<?php $this->stop('principal') ?>