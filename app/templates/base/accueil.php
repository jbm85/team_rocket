<?php $this->layout('layout', ['title' => 'Events',
								'id' => 'index_page',]) ?>
<?php $this->start('principal') ?>
	<!--Presentation des evenements-->
	<h2>Créer un évènement n'a jamais été aussi simple !</h2>
<?php debug($evenements) ?>
<?php foreach($evenements as $key => $value) : ?>
	<section>

		<h3><?php echo $value['titre']; ?></h3>
		<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_1']) ?>" alt="description de l'evenement"></div>
		<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_2']) ?>" alt="description de l'evenement"></div>
		<div class="index_img"><img src="<?= $this->assetUrl('img/'. $value['photo_3']) ?>" alt="description de l'evenement"></div>
		<p><?php echo $value['date']; ?></p>
		<p><?php echo $value['capacite']; ?></p>
		<p><?php echo $value['descriptif']; ?></p>
		<p><?php echo $value['nb_participants']; ?></p>
		<a href="<?= $this->url('evenement_description') ?>"><i class="fa fa-info-circle"></i><span>Plus de détails</span></a>
		<a href="<?= $this->url('inscription') ?>"><i class="fa fa-sign-in"></i><span>S'inscrire</span></a>
		<a href="<?= $this->url ('panier') ?>"><i class="fa fa-check-circle"></i><span>Participer</span></a>
	</section>

<?php endforeach ; ?>
<?php $this->stop('principal') ?>

