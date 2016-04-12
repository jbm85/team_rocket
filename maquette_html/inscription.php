<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/inscription.css">
        <link rel="stylesheet" href="css/style.css">
        
        <script>
            
        </script>


    </head>
    <body>
    <header>

            <!-- Menu de navigation pour le format smartphone -->
            <nav id="mobile_nav">
                <h1><a href="#" title="Nom du site">Events</a></h1>
                <a href="#" title="Menu de navigation"><i class="fa fa-bars"></i></a>

                <ul id="nav_hide">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="derniers_evenements.html">Derniers évènements</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="recherche.html">Recherche</a></li>
                </ul>
            </nav>

            <!-- Menu de navigation pour les formats tablette/desktop -->
            <nav id="main_nav">
                <h1 id="accueil"><a href="#">Events</a></h1>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="derniers_evenements.html">Derniers évènements</a></li>
                    <li><a href="#">Inscription</a></li>
                    <li><a href="recherche.html">Recherche</a></li>

                </ul>
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputName2">Name</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <button type="submit" class="btn btn-default">Send invitation</button>
                </form>
            </nav>
            <p>Bienvenue sur le site de Events. Si vous aussi vous souhaitez créer un évènement, inscrivez-vous dès maintenant !</p>
        </header>
        <!-- <h1>Inscription</h1>
        <form action="" method="post">

            <label for="lastname" class="form-group">Votre prénom</label>
            <input type="text" name="firstname" required class="form-control">

            <label for="lastname" class="form-group">Votre nom</label>
            <input type="text" name="lastname" required class="form-control">

            <label for="nickname" class="form-group">Votre pseudo</label>
            <input type="text" name="nickname" required class="form-control">

            <label for="birth" class="form-group">Date de naissance</label>
            <input type="text" name="birth" required class="form-control">

            <label for="phone" class="form-group">Téléphone</label>
            <input type="text" name="phone" class="form-control">

            <label for="email" class="form-group">Votre email</label>
            <input type="text" name="email" required class="form-control">

            <label for="password" class="form-group">Votre mot de passe</label>
            <input type="password" name="password" required class="form-control">

            <label for="passwordCheck" class="form-group">Confirmer Votre mot de passe</label>
            <input type="password" name="passwordCheck" required class="form-control">

            <label for="photo" class="form-group">Votre Photo</label>
            <input type="file" name="photo" class="form-control">

            <button type="submit" name="submit" class="btn btn-default" >Envoyer</button>
        </form>

        -->
    <form action="#" onsubmit="return valideForm(this)" id="sky-form4" class="sky-form" >
        <h2>Formulaire d'inscription</h2>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="username" placeholder="Votre Pseudo">
                    <b class="tooltip tooltip-bottom-right">Pour vous reconnaitre</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Votre Email">
                    <b class="tooltip tooltip-bottom-right">Pour vous contacter et vous connecter</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-phone"></i>
                    <input type="text" name="phone" placeholder="Votre numéro de téléphone">
                    <b class="tooltip tooltip-bottom-right">Optionnel</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Mot de passe" id="password">
                    <b class="tooltip tooltip-bottom-right">N'oubliez pas votre mot de passe</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="passwordConfirm" placeholder="Confirmer votre mot de passe">
                    <b class="tooltip tooltip-bottom-right">N'oubliez pas votre mot de passe</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="firstname" placeholder="Votre prenom">
                    </label>
                </section>
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="lastname" placeholder="Votre nom">
                    </label>
                </section>
            
            <section class="input-group date col col-6" id="sandbox-container">
            <label class="input">
                <input type="text"  class="form-control datepicker" placeholder="Votre date de naissance"></label><span class="input-group-addon"><i class="glyphicon glyphicon-th"  ></i></span>
            </section>
            </div>
            
            <section>
                <label class="select">
                    <select name="gender">
                        <option value="0" selected disabled>Genre</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                    </select>
                    <i></i>
                </label>
            </section>

            <section>
                <label class="input" for="photo">
                    <i class="icon-append fa fa-camera"></i>
                    <input type="file" id="uploadFile" name="photo" placeholder="Votre photo">
                </label>
            </section>
            <section id="sectionPhotoProfil" class="preview">
                
            </section>

        </fieldset>
        <section>
            <button type="submit" name="submit" class="btn-u">Envoyer</button>
        </section>
    </form>

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
        
                
                <p></p>

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

                    <!-- Palier 9 -->

                    

                    <span id="helpForm"></span>
                </form>
            </section>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        
                      </div>
                    </div>
                  </div>
                </div>


            
            <!-- Fin des contacts -->
        </footer>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
   
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/verification_formulaire.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

</body>
</html>