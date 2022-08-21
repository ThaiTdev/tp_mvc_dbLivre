 <?php foreach($editeurs as $editeur):?>
<h3><?=$editeur->Titre_livre?> édité  par "<?=$editeur->Editeur?>"</h3>
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
                    <th>Nom editeur</th>
                    <th>Prenom editeur</th>
                    <th>Editeur</th>
                    <th>Annee edition</th>
                    <th>Prix livre</th>
                    <th>Langue livre</th>
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($editeurs as $editeur):?>
                <tr>
                    <td><?=$editeur->ISBN?></td>
                    <td><?=$editeur->Titre_livre?></td>
                    <td><?=$editeur->Theme_livre?></td>
                    <td><?=$editeur->Nbr_page_livre?></td>
                    <td><?=$editeur->Format_livre?></td>
                    <td><?=$editeur->Nom_auteur?></td>
                    <td><?=$editeur->Prenom_auteur?></td>
                    <td><?=$editeur->Editeur?></td>
                    <td><?=$editeur->Annee_edition?></td>
                    <td><?=$editeur->Prix_livre?></td>
                    <td><?=$editeur->Langue_livre?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>