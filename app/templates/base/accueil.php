<?php $this->layout('layout', ['title' => 'Events',
								'id' => 'index_page']) ?>
<?php $this->start('principal') ?>

	<!--Presentation des evenements-->
	<h2>Créer un évènement n'a jamais été aussi simple !</h2>

<?php
/*
$tableau = ['photo1.jpg', 'photo2.jpg', 'photo3.jpg'];
echo serialize($tableau); // a:3:{i:0;s:10:"photo1.jpg";i:1;s:10:"photo2.jpg";i:2;s:10:"photo3.jpg";}
var_dump(unserialize('a:3:{i:0;s:10:"photo1.jpg";i:1;s:10:"photo2.jpg";i:2;s:10:"photo3.jpg";}'));
*/
?>

<?php debug($evenements) ?>
<?php foreach($evenements as $key => $value) : ?>
	<section>

		<!--Affichage du titre de l'évenement-->
		<h3><?= $value['titre'] ?></h3>

		<!--Affichage des photos de l'évenement-->
		<?php if (!empty($value['photo_1'])) : ?>
			<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_1']) ?>" alt="description de l'evenement"></div>
		<?php endif; ?>

		<?php if (!empty($value['photo_2'])) : ?>
			<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_2']) ?>" alt="description de l'evenement"></div>
		<?php endif; ?>

		<?php if (!empty($value['photo_3'])) : ?>
			<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_3']) ?>" alt="description de l'evenement"></div>
		<?php endif; ?>

		<!--Affichage de la date et les horaires de l'évenement-->
		<p>Date de l'évènement : <strong><?= $value['date'] ?></strong> de <strong><?= $value['heure_debut'] ?></strong> à <strong><?= $value['heure_fin'] ?></strong></p>

		<!--Affichage de la capacité maximale de l'évenement-->
		<p>Le nombre maximum de personnes pour cet évènement est de <strong><?= $value['capacite'] ?></strong> personne<?= ($value['capacite']) > 1 ? 's' : '' ?>.</p>

		<!--Description de l'évenement-->
		<p>Description de l'évènement : <strong><?= $value['descriptif'] ?></strong></p>

		<!--Nombre de participants à l'évènement en cours-->
		<p>Il y a, à l'heure actuel, <strong><?= $value['nb_participant'] ?></strong> participant(e)<?= ($value['nb_participant']) > 1 ? 's' : '' ?> pour cet évènement.</p>

		<!--Liens d'interactions (details, inscription, participation)-->
		<a href="<?= $this->url('evenement_description',  ['id' => $value['id']]); ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
		<a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
		<a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>

	</section>

	<?php endforeach; ?>

<?php $this->stop('principal') ?>

