<?php $this->layout('layout', ['title' => 'Events - Gestion Membres',
    'id' => 'manage_member_page',]) ?>
<?php $this->start('principal') ?>
        <!--Contenu principal-->

            <table class="table">
                <thead>
                    <tr>
                        <th>Id_membre</th>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Mot de pass</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Statut</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>dudu-henri</td>
                        <td>dudu-henri@gm.com</td>
                        <td>abcdef</td>
                        <td>Dupont</td>
                        <td>Henri</td>
                        <td>M</td>
                        <td>0</td>
                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>mira-21</td>
                        <td>mira@gm.com</td>
                        <td>12345</td>
                        <td>Lopes</td>
                        <td>Mario</td>
                        <td>M</td>
                        <td>0</td>
                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>figo-7</td>
                        <td>figo-7@gm.com</td>
                        <td>figo7</td>
                        <td>Figo</td>
                        <td>Luis</td>
                        <td>M</td>
                        <td>1</td>
                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>sophie-18</td>
                        <td>sophie-18@gm.com</td>
                        <td>sophie18</td>
                        <td>Durand</td>
                        <td>Sophie</td>
                        <td>F</td>
                        <td>0</td>
                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>

                </tbody>
            </table>

            <section>
                <article>
                    <h4>Id_Membre :</h4>
                    <p>1</p>

                    <h4>Pseudo :</h4>
                    <p>dudu-henri</p>

                    <h4>Email :</h4>
                    <p>dudu-henri@gm.com</p>

                    <h4>Mot de pass :</h4>
                    <p>abcdef</p>

                    <h4>Nom :</h4>
                    <p>Dupont</p>

                    <h4>Prénom :</h4>
                    <p>Henri</p>

                    <h4>Sexe :</h4>
                    <p>M</p>

                    <h4>Statut :</h4>
                    <p>0</p>

                    <a href="#">Modifier</a>

                    <a href="#">Supprimer</a>
                </article>

                <span></span>

                <article>
                    <h4>Id_Membre :</h4>
                    <p>2</p>

                    <h4>Pseudo :</h4>
                    <p>mira-21</p>

                    <h4>Email :</h4>
                    <p>mira@gm.com</p>

                    <h4>Mot de pass :</h4>
                    <p>12345</p>

                    <h4>Nom :</h4>
                    <p>Lopes</p>

                    <h4>Prénom :</h4>
                    <p>Mario</p>

                    <h4>Sexe :</h4>
                    <p>M</p>

                    <h4>Statut :</h4>
                    <p>0</p>

                    <a href="#">Modifier</a>

                    <a href="#">Supprimer</a>
                </article>

                <span></span>

                <article>
                    <h4>Id_Membre :</h4>
                    <p>3</p>

                    <h4>Pseudo :</h4>
                    <p>figo-7</p>

                    <h4>Email :</h4>
                    <p>figo-7@gm.com</p>

                    <h4>Mot de pass :</h4>
                    <p>figo7</p>

                    <h4>Nom :</h4>
                    <p>Figo</p>

                    <h4>Prénom :</h4>
                    <p>Luis</p>

                    <h4>Sexe :</h4>
                    <p>M</p>

                    <h4>Statut :</h4>
                    <p>1</p>

                    <a href="#">Modifier</a>

                    <a href="#">Supprimer</a>
                </article>

                <span></span>

                <article>
                    <h4>Id_Membre :</h4>
                    <p>4</p>

                    <h4>Pseudo :</h4>
                    <p>sophie-18</p>

                    <h4>Email :</h4>
                    <p>sophie-18@gm.com</p>

                    <h4>Mot de pass :</h4>
                    <p>sophie18</p>

                    <h4>Nom :</h4>
                    <p>Durand</p>

                    <h4>Prénom :</h4>
                    <p>Sophie</p>

                    <h4>Sexe :</h4>
                    <p>F</p>

                    <h4>Statut :</h4>
                    <p>0</p>

                    <a href="#">Modifier</a>

                    <a href="#">Supprimer</a>
                </article>

            </section>

<?php $this->stop('principal') ?>