<?php $this->layout('layout', ['title' => 'Events - Connexion', 'id' => 'basket_page']) ?>

<?php $this->start('principal') ?>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Localisation</th>
                    <th>Tarif unitaire (TTC)</th>
                    <th>Quantité</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Initiation à l'univers du cirque</td>
                    <td>Spectacle de cirque</td>
                    <td>8 Mai 2016</td>
                    <td>Rue du chevreuil à Paris</td>
                    <td>7€</td>
                    <td>1</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>Casting de danse classique</td>
                    <td>Recherche de danseurs/danseuses classiques pour un futur spectacle</td>
                    <td>10 Juin 2016</td>
                    <td>Boulevard des Capucines à Paris</td>
                    <td>Gratuit</td>
                    <td>2</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>Le Roi lion</td>
                    <td>Avant-première du spectacle 'Roi lion'</td>
                    <td>10 Juin 2016</td>
                    <td>Rue Karman à Aubervilliers</td>
                    <td>12€</td>
                    <td>1</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                </tr>

                <tr>
                    <td colspan="7"><strong>Total participatif :</strong></td>
                    <td><strong>19€</strong></td>
                </tr>
            </tbody>
        </table>

        <form action="">
            <input type="submit" value="Payer mes participations">
        </form>

        <section>
            <article>
                <h4>Titre :</h4>
                <p>Initiation à l'univers du cirque</p>

                <h4>Description :</h4>
                <p>Recherche de danseurs/danseuses classiques pour un futur spectacle</p>

                <h4>Date :</h4>
                <p>8 Mai 2016</p>

                <h4>Localisation :</h4>
                <p>Boulevard des Capucines à Paris</p>

                <h4>Prix unitaire :</h4>
                <p>7€</p>

                <h4>Quantité :</h4>
                <p>1</p>

                <a href="#">Modifier</a>

                <a href="#">Supprimer</a>
            </article>

            <span></span>

            <article>
                <h4>Titre :</h4>
                <p>Casting de danse classique</p>

                <h4>Description :</h4>
                <p>Spectacle de cirque</p>

                <h4>Date :</h4>
                <p>10 Juin 2016</p>

                <h4>Localisation :</h4>
                <p>Rue du chevreuil à Paris</p>

                <h4>Prix unitaire :</h4>
                <p>Gratuit</p>

                <h4>Quantité :</h4>
                <p>2</p>

                <a href="#">Modifier</a>

                <a href="#">Supprimer</a>
            </article>

            <span></span>

            <article>
                <h4>Titre :</h4>
                <p>Le Roi lion</p>

                <h4>Description :</h4>
                <p>Avant-première du spectacle 'Roi lion'</p>

                <h4>Date :</h4>
                <p>10 Juin 2016</p>

                <h4>Localisation :</h4>
                <p>Rue Karman à Aubervilliers</p>

                <h4>Prix unitaire :</h4>
                <p>12€</p>

                <h4>Quantité :</h4>
                <p>1</p>

                <a href="#">Modifier</a>

                <a href="#">Supprimer</a>
            </article>

            <div>
                <h4>Total de votre participation :</h4>
                <p>19€</p>
                <a href="#">Payer</a>
            </div>

        </section>

<?php $this->stop('principal') ?>