<?php $this->layout('layout', ['title' => 'Events - Evenements', 'id' => 'event_description_page',]) ?>

<?php $this->start('principal') ?>
<?php  debug($details_evenement) ?>
	<section>
		<h3><?= $details_evenement['titre'] ?> </h3>
		<div class="profil_detail_img"><img src="<?= $this->assetUrl('img/theflash.jpg') ?>" alt="photo de profil"></div>


		<ul>
			<li>Date de début : <?= $details_evenement['date_debut'] ?> à <?= $details_evenement['heure_debut'] ?></li>
			<li>Date de fin : <?= $details_evenement['date_fin'] ?> à <?= $details_evenement['heure_fin'] ?></li>
			<li>Description : <?= $details_evenement['descriptif'] ?></li>
			<li>Adresse : <?= $details_evenement['adresse'] ?></li>
			<li>Ville : <?= $details_evenement['ville'] ?></li>
			<li>Code postal : <?= $details_evenement['code_postal'] ?></li>
			<li>Prix : <?= $details_evenement['prix'] ?> €</li>
		</ul>

		<!-- photo du lieu de l'évènement -->
		<article>
			<div class="event_description_img"><img src="<?= $this->assetUrl('img/' . $details_evenement['photo_1']) ?>" alt="description de l'evenement"></div>
			<div class="event_description_img"><img src="<?= $this->assetUrl('img/' . $details_evenement['photo_2']) ?>" alt="description de l'evenement"></div>
			<div class="event_description_img"><img src="<?= $this->assetUrl('img/' . $details_evenement['photo_3']) ?>" alt="description de l'evenement"></div>
		</article>


		<!-- google map view -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.2757235953122!2d151.21310801520983!3d-33.856784380659604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae665e892fdd%3A0x3133f8d75a1ac251!2sOp%C3%A9ra+de+Sydney!5e0!3m2!1sfr!2sfr!4v1460027006326" frameborder="0" allowfullscreen></iframe>

	</section>




	<a href="#" class="btn btn-primary active" role="button">Participer à l'évènement</a>

<?php $this->stop('principal') ?>