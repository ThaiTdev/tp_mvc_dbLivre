<h3>Mes fournisseurs</h3>

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
            <?php foreach($fournisseurs as $fournisseur):?>
                <tr>
                    <td><?=$fournisseur->Code_fournisseur?></td>
                    <td><?=$fournisseur->Raison_sociale?></td>
                    <td><?=$fournisseur->Rue_fournisseur?></td>
                    <td><?=$fournisseur->Code_postal?></td>
                    <td><?=$fournisseur->Localite?></td>
                    <td><?=$fournisseur->Pays?></td>
                    <td><?=$fournisseur->Tel_fournisseur?></td>
                    <td><?=$fournisseur->Url_fournisseur?></td>
                    <td><?=$fournisseur->Email_fournisseur?></td>
                    <td><?=$fournisseur->Fax_fournisseur?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>