
<?php foreach ($countrys as $country ):?>
    <?php endforeach;?>
<h3>Ce fournisseurs est basé en <?=$country->Pays?></h3>

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
            <?php foreach($countrys as $country):?>
                <tr>
                    <td><?=$country->Code_fournisseur?></td>
                    <td><?=$country->Raison_sociale?></td>
                    <td><?=$country->Rue_fournisseur?></td>
                    <td><?=$country->Code_postal?></td>
                    <td><?=$country->Localite?></td>
                    <td><?=$country->Pays?></td>
                    <td><?=$country->Tel_fournisseur?></td>
                    <td><?=$country->Url_fournisseur?></td>
                    <td><?=$country->Email_fournisseur?></td>
                    <td><?=$country->Fax_fournisseur?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>