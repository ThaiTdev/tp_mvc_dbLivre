 <?php foreach($auteurs as $auteur):?>
<h3><?=$auteur->Titre_livre?> de "<?=$auteur->Nom_auteur?> <?=$auteur->Prenom_auteur?>"</h3>
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
            <?php foreach($auteurs as $auteur):?>
                <tr>
                    <td><?=$auteur->ISBN?></td>
                    <td><?=$auteur->Titre_livre?></td>
                    <td><?=$auteur->Theme_livre?></td>
                    <td><?=$auteur->Nbr_page_livre?></td>
                    <td><?=$auteur->Format_livre?></td>
                    <td><?=$auteur->Nom_auteur?></td>
                    <td><?=$auteur->Prenom_auteur?></td>
                    <td><?=$auteur->Editeur?></td>
                    <td><?=$auteur->Annee_edition?></td>
                    <td><?=$auteur->Prix_livre?></td>
                    <td><?=$auteur->Langue_livre?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>