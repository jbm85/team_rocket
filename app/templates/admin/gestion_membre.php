<?php $this->layout('layout', ['title' => 'Events - Gestion Membres',
    'id' => 'manage_member_page',]) ?>
<?php $this->start('principal') ?>
<?php if (!empty($tabmembre)) { ?>
        <!--Contenu principal-->
    <?php
        $nbre_membre = count($tabmembre);

        echo '<table class="table">';
        echo '<tr>';
        foreach($tabmembre[0] as $key => $value) {
            if($key == 'id'){
                echo '<th>  EFFACER  </th>';
            }else{
                echo '<th>' . $key . '</th>';
            }

        }
        echo '</tr>';

        for($i=0;$i<$nbre_membre;$i++) {
            echo '<tr>';

            foreach($tabmembre[$i] as $key => $value) {
                if ($key == 'photo_profil'){
                    echo '<td><img src="' . $this->assetUrl('img/photo_profil/'.$value).'" alt="photo_profil"></td>';
                }
                elseif ($key == 'id') {
                    echo '<td><a href="'.$this->url('gestion_membre_id' , ['id' => $value]) .'"><i class="fa fa-trash-o"></i></a></td>';
                } else {
                    echo '<td>' . $value . '</td>';

                }
            }
            echo '</tr>';
        }

        echo '</table>';
    ?>
    <? }else{
            echo '<p>Rien à afficher</p>';
        }
     ?>

<?php $this->stop('principal') ?>