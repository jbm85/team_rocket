<?php $this->layout('layout', ['title' => 'Events - Evenements', 'id' => 'event_description_page',]) ?>

<?php $this->start('principal') ?>
	<h3>Titre de l'évenement</h3>
	<div class="profil_detail_img"><img src="<?= $this->assetUrl('img/theflash.jpg') ?>" alt="photo de profil"></div>

	<h4>Détail de l'évènement</h4>

	<ul>
		<li>Date</li>
		<li>Description</li>
		<li>Localisation</li>
		<li>Prix</li>
	</ul>

		<!-- photo du lieu de l'évènement -->
	<article>
		<div class="event_description_img"><img src="<?= $this->assetUrl('img/evenement1_img1.jpg') ?>" alt="description de l'evenement"></div>
		<div class="event_description_img"><img src="<?= $this->assetUrl('img/evenement1_img2.jpg') ?>" alt="description de l'evenement"></div>
		<div class="event_description_img"><img src="<?= $this->assetUrl('img/evenement1_img3.jpg') ?>" alt="description de l'evenement"></div>
	</article>


	<!-- google map view -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.2757235953122!2d151.21310801520983!3d-33.856784380659604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae665e892fdd%3A0x3133f8d75a1ac251!2sOp%C3%A9ra+de+Sydney!5e0!3m2!1sfr!2sfr!4v1460027006326" frameborder="0" allowfullscreen></iframe>

	<a href="#" class="btn btn-primary active" role="button">Participer à l'évènement</a>

<?php $this->stop('principal') ?>