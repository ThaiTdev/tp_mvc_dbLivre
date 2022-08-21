
 <?php foreach($raisonS as $rs):?>
<?php endforeach;?>
<h3><?=$rs->Raison_sociale;?> es
t notre nouveau fournisseur </h3>

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
            <?php foreach($raisonS as $rs):?>
                <tr>
                    <td><?=$rs->Code_fournisseur?></td>
                    <td><?=$rs->Raison_sociale?></td>
                    <td><?=$rs->Rue_fournisseur?></td>
                    <td><?=$rs->Code_postal?></td>
                    <td><?=$rs->Localite?></td>
                    <td><?=$rs->Pays?></td>
                    <td><?=$rs->Tel_fournisseur?></td>
                    <td><?=$rs->Url_fournisseur?></td>
                    <td><?=$rs->Email_fournisseur?></td>
                    <td><?=$rs->Fax_fournisseur?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>