<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?= $this->e($title) ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/inscription.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/standalone.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/bootstrap-clockpicker.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body>
<header>
	<!-- Menu de navigation pour le format smartphone -->
	<nav id="main_nav">
		<h1>Events</h1>
		<a href="#" title="Menu de navigation"><i class="fa fa-bars"></i></a>

		<ul id="nav_hide">
			<li><a href="<?= $this->url('accueil') ?>">Accueil</a></li>
			<li><a href="<?= $this->url('derniers_evenements') ?>">Derniers évènements</a></li>


			<?php if (!isset($_SESSION['user'])) : ?>
			<li><a href="<?= $this->url('connexion') ?>">Connexion</a></li>
				<li><a href="<?= $this->url('inscription') ?>">Inscription</a></li>
			<?php else: ?>
			<li><a href="<?= $this->url('deconnexion') ?>">Deconnexion</a></li>
			<?php endif; ?>
			<li><a href="<?= $this->url('recherche') ?>">Recherche</a></li>
		</ul>
	</nav>

	<p>Bienvenue sur le site de Events. Si vous aussi vous souhaitez créer un évènement, inscrivez-vous dès maintenant !</p>
</header>

<!-- Contenu principal -->
<main id="<?= $this->e($id) ?>">

	<?= $this->section('principal') ?>

</main>

<!--Pied de page-->
<footer>
	<ul>
		<li><a href="#">Mentions légales</a></li>
		<li><a href="#">Conditions Générales de Vente</a></li>
		<li><a href="#">Plan du site</a></li>
		<li><a href="#">Imprimer la page</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal">Contact</a></li>
	</ul>
	<em>Copyright Events - Jean-Baptiste - Jeremy - Mathias - Fabrice</em>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content" >
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Contactez Nous</h4>
				</div>

				<div class="modal-body">
					<section id="contactSection">

						<!-- Formulaire de contact -->

						<form method="post">
							<div class="form-group">
								<label for="Email">Votre adresse email</label>
								<input type="email" class="form-control" id="Email" name="yourEmail" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="Nom">Nom</label>
								<input type="text" class="form-control" id="Nom" name="yourName" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="msg">Votre demande</label>
								<textarea name="msg" required placeholder="Votre message ici..."></textarea>
							</div>

							<button type="submit" name="send" class="btn btn-default">Envoyer</button>
						</form>

						<span id="helpForm"></span>

					</section>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>

			</div>
		</div>
	</div>

</footer>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- JS -->
<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap-clockpicker.min.js') ?>" ></script>
<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap-datepicker.js') ?>" ></script>
<script type="text/javascript" src="<?= $this->assetUrl('js/profil.js') ?>" ></script>
<script type="text/javascript" src="<?= $this->assetUrl('verification_formulaire.js') ?>"></script>
<script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>" ></script>
</body>

</html>
