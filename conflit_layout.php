<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title><?= $this->e($title) ?></title>
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/inscription.css') ?>">
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
					<li><a href="<?= $this->url('inscription') ?>">Inscription</a></li>
					<li><a href="<?= $this->url('connexion') ?>">Connexion</a></li>
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
				<li><a href="#" data-toggle="modal" data-target="#mlModal">Mentions légales</a></li>
				<li><a href="#" data-toggle="modal" data-target="#cgvModal">Conditions Générales de Vente</a></li>
				<li><a href="#" data-toggle="modal" data-target="#planSiteModal">Plan du site</a></li>
				<li><a href="#" OnClick="javascript:window.print()">Imprimer la page</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal">Contact</a></li>
			</ul>
			<em>Copyright Events - Jean-Baptiste - Jeremy - Mathias - Fabrice</em>

			<!-- Modal contact -->
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
			<!-- Fin modal contact -->

			<!-- Modal cgv -->
			<div class="modal fade" id="cgvModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content" >
						<div class="modal-header" >
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Conditions Générales de Vente</h4>
						</div>
						<div class="modal-body">
							<section id="cgv">
								<p>Le présent service de billetterie est réalisé par la société Digitick SA :</br></br>

									Siège social : 12 rue de Penthièvre 75008 PARIS</br></br>

									Représentant légal : Quentin SCHAEPELYNCK</br></br>

									Hébergeur du site Digitick.com : Colt Telecom 63, bd Bessières 75017 Paris</br></br>

									Capital social : 290 482,40 euros</br></br>

									RCS : 453 942 948</br></br>

									N° Id. TVA : FR72453942948</br></br>

									Téléphone : 0892 700 840 (0,45€ TTC/min)</br></br>

									Télécopie : 04.91.68.30.26</br></br>

									Assurance de responsabilité civile professionnelle (couverture sans limitation géographique) : HISCOX – 12 quai des Queyries – CS 41177 – 33072 Bordeaux</br></br>

									Les présentes conditions générales ont été mises en ligne le 24 Juin 2015.</br></br>

									Il est préalablement précisé que les présentes conditions générales de vente régissent exclusivement les ventes de billets de spectacles ou d'événements (billets d'entrée à des concerts de musique, rencontres sportives, musées, parcs de loisirs, théâtre et festivals) sur le site www.digitick.com.</br></br>

									Digitick intervient comme intermédiaire, en son propre nom mais pour le compte d'organisateurs et/ou Producteurs d'événements ou de spectacles.</br></br>

									En conséquence, les présentes conditions générales de vente concernent uniquement les actes de vente de billetterie et en aucun cas le spectacle ou l'évènement lui-même.</br></br>

									L'utilisation du site Digitick, de toute fonctionnalité du site Digitick disponible à l'adresse www.digitick.com et des applications mobiles Digitick implique l'acceptation expresse, préalable, pleine et entière par le Client des présentes Conditions Générales de Vente.</br></br></p>

							</section>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin modal cgv -->

			<!-- Modal mentions legal -->
			<div class="modal fade" id="mlModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

				<div class="modal-dialog" role="document">

					<div class="modal-content" >

						<div class="modal-header" >
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
						</div>

						<div class="modal-body">
							<section id="ml">
								<article>
									<p>RÉFÉRENCES LÉGALES DE LA SOCIÉTÉ</br></br>

									Le présent site est la propriété de la Société DIGITICK SA :</br>
									Le siège social de l'entreprise est basé : 12 rue de Penthièvre 75008 PARIS</br>
									Tél. : 0892 700 840 (0,45 Euro / min)</br>
									Adresse de courrier électronique : hotline [arobase] digitick.com</br></br>

									Service administratif :</br>
									Tél : 04 91 05 15 57</br></br>

									Service clients / Service Après-Ventes</br>
									Tél : 04 91 05 58 52</br></br>

									Infos & Réservations :</br>
									Tél : 0892 700 840 (0,45 Euro / min)</br></br>

									SA au capital de 290 482,40 Euros Immatriculée au Registre du commerce et des sociétés de PARIS sous le numéro 453 942 948</br>
									SIRET : 453 942 948 00069</br>
									N° identifiant TVA FR72453942948</br>
									Directeur de la publication : Quentin Schaepelynck</br>
									</p>
								</article>
							</section>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin modal mentions legal -->

			<!-- Modal mentions legal -->
			<div class="modal fade" id="planSiteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

				<div class="modal-dialog" role="document">

					<div class="modal-content" >

						<div class="modal-header" >
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Plan site</h4>
						</div>

						<div class="modal-body">
							<section id="planSite">
								<nav>
									<ul>
										<li><a href="<?= $this->url('accueil') ?>">Accueil</a></li>
										<li><a href="<?= $this->url('derniers_evenements') ?>">Derniers évènements</a></li>
										<li><a href="<?= $this->url('recherche') ?>">Recherche</a></li>

									</ul>
								</nav>
							</section>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin modal plan site -->
		</footer>


		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- JS -->
		<script type="text/javascript" src="<?= $this->assetUrl('js/profil.js') ?>" ></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap-datepicker.js') ?>" ></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>" ></script>
	</body>

</html>
