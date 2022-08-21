<h3>Mes Commandes</h3>

<div class="container-fluide ">
    <div class="row">
       <table class='col-10 m-auto table table-bordered table-responsive-md bg_table '>
            <thead>
                <tr>
                    <th>Titre livre</th>
                    <th>Code_fournisseur</th>
                    <th>Raison_sociale</th>
                    <th>Id_commande</th>
                    <th>Id_livre</th>
                    <th>Id_fournisseur</th>
                    <th>Date_achat</th>
                    <th>Prix_achat</th>
                    <th>Nbr_exemplaires</th>
                    <th>modifier</th>
                    <th>supprimer</th>
                  
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($commandes as $commande):?>
                <tr>
                    <td class="element<?=$commande->Id_commande?>"><?=$commande->Titre_livre?></td>
                    <td><?=$commande->Code_fournisseur?></td> 
                    <td><?=$commande->Raison_sociale?></td>
                    <td><?=$commande->Id_commande?></td>
                    <td><?=$commande->Id_livre?></td>
                    <td><?=$commande->Id_fournisseur?></td>
                    <td><?=$commande->Date_achat?></td>
                    <td><?=$commande->Prix_achat?></td>
                    <td><?=$commande->Nbr_exemplaires?></td>
                    <td><a href="?controller=commander&action=all_formNewCommande">modifier</td>
                    <td><p class="pLink" onclick="validateDelete('commander', <?=$commande->Id_commande?>)">supprimer</td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>