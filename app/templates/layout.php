<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body>
<header>
	<!-- Menu de navigation pour le format smartphone -->
	<nav id="mobile_nav">
		<h1><?= $this->e($title) ?></h1>
		<a href="#" title="Menu de navigation"><i class="fa fa-bars"></i></a>

		<ul id="nav_hide">
			<li><a href="<?= $this->url('accueil') ?>">Accueil</a></li>
			<li><a href="derniers_evenements.html">Derniers évènements</a></li>
			<li><a href="inscription.php">Inscription</a></li>
			<li><a href="connexion.html">Connexion</a></li>
			<li><a href="recherche.html">Recherche</a></li>
		</ul>
	</nav>

	<!-- Menu de navigation pour les formats tablette/desktop -->
	<nav id="main_nav">
		<h1><?= $this->e($title) ?></h1>
		<ul>
			<li><a href="index.html">Accueil</a></li>
			<li><a href="derniers_evenements.html">Derniers évènements</a></li>
			<li><a href="inscription.php">Inscription</a></li>
			<li><a href="connexion.html">Connexion</a></li>
			<li><a href="recherche.html">Recherche</a></li>

		</ul>
	</nav>
	<p>Bienvenue sur le site de Events. Si vous aussi vous souhaitez créer un évènement, inscrivez-vous dès maintenant !</p>
</header>

<!-- Contenu principal -->
<main id="<?= $this->e($id) ?>">
	<h2><?= $this->e($h2) ?></h2>

	<?= $this->section('principal') ?>

</main>

<!--Pied de page-->
<footer>

	<ul>
		<li><a href="#">Mentions légales</a></li>
		<li><a href="#">Conditions Générales de Vente</a></li>
		<li><a href="#">Plan du site</a></li>
		<li><a href="#">Imprimer la page</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
	<em>Copyright Events - Jean-Baptiste - Jeremy - Mathias - Fabrice</em>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!-- JS -->
<script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>" ></script>
</body>
</html>
