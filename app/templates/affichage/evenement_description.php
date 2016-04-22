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
			<li>Adresse : <strong><?= $details_evenement['adresse'] ?></strong></li>
			<li>Ville : <strong><?= $details_evenement['ville'] ?></strong></li>
			<li>Code postal : <strong><?= $details_evenement['code_postal'] ?></strong></li>
		</ul>

		<!--Affichage des photos de l'évenement-->
		<article>

			<?php if (!empty($value['photo_1'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/'. $value['photo_1']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

			<?php if (!empty($value['photo_2'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/'. $value['photo_2']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

			<?php if (!empty($value['photo_3'])) : ?>
				<div class="last_events_img"><img src="<?= $this->assetUrl('img/'. $value['photo_3']) ?>" alt="description de l'evenement"></div>
			<?php endif; ?>

		</article>


		<!-- google map view -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.2757235953122!2d151.21310801520983!3d-33.856784380659604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae665e892fdd%3A0x3133f8d75a1ac251!2sOp%C3%A9ra+de+Sydney!5e0!3m2!1sfr!2sfr!4v1460027006326" frameborder="0" allowfullscreen></iframe>

	</section>

	<a href="#" class="btn btn-primary active" role="button">Participer à l'évènement</a>

<?php $this->stop('principal') ?>