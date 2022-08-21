<h3>Mes livres </h3>

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
                    <th>modifier</th>
                    <th>supprimer</th>
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($livres as $livre):?>
                <tr>
                    <td ><?=$livre->ISBN?></td>
                    <td class="element<?=$livre->Id_livre?>" value="livre" ><?=$livre->Titre_livre?></td>
                    <td><?=$livre->Theme_livre?></td>
                    <td><?=$livre->Nbr_page_livre?></td>
                    <td><?=$livre->Format_livre?></td>
                    <td><?=$livre->Nom_auteur?></td>
                    <td><?=$livre->Prenom_auteur?></td>
                    <td><?=$livre->Editeur?></td>
                    <td><?=$livre->Annee_edition?></td>
                    <td><?=$livre->Prix_livre?></td>
                    <td><?=$livre->Langue_livre?></td>
                    <td><a href="?controller=livre&action=all_checkBook&Id_livre=<?=$livre->Id_livre?>">modifier</a></td>
                    <td><p class="pLink" onclick="validateDelete('livre',<?=$livre->Id_livre?>)">supprimer<p></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>