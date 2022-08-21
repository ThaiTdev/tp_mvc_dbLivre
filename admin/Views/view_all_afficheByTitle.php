 <?php foreach($titles as $title):?>
<h3><?=$title->Titre_livre?></h3>
<?php endforeach;?>

<div class="container">
    <div class="row">
       <table class=' col-11 m-auto table table-bordered table-responsive-md bg_table'>
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Titre livre</th>
                    <th>Theme livre</th>
                    <th>Nbr page livre</th>
                    <th>Format livre</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Editeur</th>
                    <th>Annee edition</th>
                    <th>Prix livre</th>
                    <th>Langue livre</th>
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($titles as $title):?>
                <tr>
                    <td><?=$title->ISBN?></td>
                    <td><?=$title->Titre_livre?></td>
                    <td><?=$title->Theme_livre?></td>
                    <td><?=$title->Nbr_page_livre?></td>
                    <td><?=$title->Format_livre?></td>
                    <td><?=$title->Nom_auteur?></td>
                    <td><?=$title->Prenom_auteur?></td>
                    <td><?=$title->Editeur?></td>
                    <td><?=$title->Annee_edition?></td>
                    <td><?=$title->Prix_livre?></td>
                    <td><?=$title->Langue_livre?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>