<?php foreach($localites as $localite):?>
<?php endforeach;?>
<h3>Notre fournisseur <?=$localite->Raison_sociale?> est de <?=$localite->Localite?> </h3>

<div class="container-fluide ">
    <div class="row">
       <table class='col-10 m-auto table table-bordered table-responsive-md bg_table '>
            <thead>
                <tr>
                    <th>Code_fournisseur</th>
                    <th>Raison_sociale</th>
                    <th>Rue_fournisseur</th>
                    <th>Code_postal</th>
                    <th>Localite</th>
                    <th>Pays</th>
                    <th>Tel_fournisseur</th>
                    <th>Url_fournisseur</th>
                    <th>Email_fournisseur</th>
                    <th>Fax_fournisseur</th>
                </tr>
            </thead>
                
            <tbody>
            <?php foreach($localites as $localite):?>
                <tr>
                    <td><?=$localite->Code_fournisseur?></td>
                    <td><?=$localite->Raison_sociale?></td>
                    <td><?=$localite->Rue_fournisseur?></td>
                    <td><?=$localite->Code_postal?></td>
                    <td><?=$localite->Localite?></td>
                    <td><?=$localite->Pays?></td>
                    <td><?=$localite->Tel_fournisseur?></td>
                    <td><?=$localite->Url_fournisseur?></td>
                    <td><?=$localite->Email_fournisseur?></td>
                    <td><?=$localite->Fax_fournisseur?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>