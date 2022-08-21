
 <?php foreach($dates as $date):?>
    <h3><?=$date->Editeur?> editeur de <?=$date->Titre_livre?> commander chez <?=$date->Raison_sociale?> </h3>
 <?php endforeach;?>

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
                  
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($dates as $date):?>
                <tr>
                    <td><?=$date->Titre_livre?></td>
                    <td><?=$date->Code_fournisseur?></td> 
                    <td><?=$date->Raison_sociale?></td>
                    <td><?=$date->Id_commande?></td>
                    <td><?=$date->Id_livre?></td>
                    <td><?=$date->Id_fournisseur?></td>
                    <td><?=$date->Date_achat?></td>
                    <td><?=$date->Prix_achat?></td>
                    <td><?=$date->Nbr_exemplaires?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>