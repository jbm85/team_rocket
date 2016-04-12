<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Events - Créer son évènement</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
    <header>

        <!-- Menu de navigation pour le format smartphone -->
        <nav id="mobile_nav">
            <h1>Events</h1>
            <a href="#" title="Menu de navigation"><i class="fa fa-bars"></i></a>

            <ul id="nav_hide">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="derniers_evenements.html">Derniers évènements</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.html">Connexion</a></li>
                <li><a href="recherche.html">Recherche</a></li>
            </ul>
        </nav>

        <!-- Menu de navigation pour les formats tablette/desktop -->
        <nav id="main_nav">
            <h1>Events</h1>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="derniers_evenements.html">Derniers évènements</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.html">Connexion</a></li>
                <li><a href="recherche.html">Recherche</a></li>

            </ul>
        </nav>
        <p>Créer votre évènement avec ce joli formulaire</p>
    </header>

    <!--Contenu principal-->
    <main id="create_event_page">

        <h2>Veuillez indiquer les informations relatives à votre évènement</h2>

        <!--Formulaire de connexion-->
        <form action="#" method="">

            <label for="">Titre :</label>
            <input type="text" id="" name="">

            <label for="">Thème :</label>
            <input type="text" id="" name="">
            <a href="#">Ajouter un autre thème</a>

            <label for="">Date :</label>
            <input type="text" id="" name="">

            <label for="">Description :</label>
            <input type="text" id="" name="">
            <a href="#">Ajouter des photos de présentations (3 au maximum)</a>

            <label for="">Adresse :</label>
            <input type="text" id="" name="">

            <label for="">Ville :</label>
            <input type="text" id="" name="">

            <label for="">Code postal :</label>
            <input type="text" id="" name="">

            <label for="">Capacité :</label>
            <input type="text" id="" name="">

            <label for="">Prix :</label>
            <input type="text" id="" name="">
            <a href="#">Tarifs et modalités liés au frais du site</a>

            <label for="">Public concerné :</label>
            <select name="" id="">
                <option value="all_public">Tous Public</option>
                <option value="major">Adulte</option>
                <option value="female">Féminin</option>
                <option value="male">Masculin</option>
            </select>

            <input type="submit" value="Créer l'évènement">

        </form>
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
    <script type="text/javascript" src="js/script.js" ></script>
    </body>
</html>