<!-- <?php foreach($fournisseurs as $fournisseur):?>
<h1>Apporter des modifications à votre fournisseur  <?=$fournisseur->Raison_sociale?> </h1>
<?php endforeach;?>

<form action="?controller=fournisseur&action=all_insertFournisseur" method="post">

 <div class="formContainer">
    <?php foreach($fournisseurs as $fournisseur):?>
        <div class="formContainer__box" >
            <label for="Code_fournisseur">Code_fournisseur</label>
            <input type="text" name="Code_fournisseur"  id="Code_fournisseur" value="<?=$fournisseur->Code_fournisseur?>"  />
            <label for="Raison_sociale">Raison_sociale</label>
            <input type="text" name="Raison_sociale"  id="Raison_sociale"  value="<?=$fournisseur->Raison_sociale?>"/>
            <label for="Rue_fournisseur">Rue_fournisseur</label>
            <input type="text" name="Rue_fournisseur"  id="Rue_fournisseur" value="<?=$fournisseur->Rue_fournisseur?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Code_postal">Code_postal</label>
            <input type="text" name="Code_postal"  id="Code_postal"  value="<?=$fournisseur->Code_postal?>"/>
            <label for="Localite">Localite</label>
            <input type="text" name="Localite"  id="Localite"   value="<?=$fournisseur->Localite?>"/>
            <label for="Pays">Pays</label>
            <input type="text" name="Pays"  id="Pays" value="<?=$fournisseur->Pays?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Tel_fournisseur">Tel_fournisseur</label>
            <input type="text" name="Tel_fournisseur"  id="Tel_fournisseur" value="<?=$fournisseur->Tel_fournisseur?>"/>
            <label for="Url_fournisseur">Url_fournisseur</label>
            <input type="text" name="Url_fournisseur"  id="Url_fournisseur" value="<?=$fournisseur->Url_fournisseur?>"/>
            <label for="Email_fournisseur">Email_fournisseur</label>
            <input type="text" name="Email_fournisseur"  id="Email_fournisseur" value="<?=$fournisseur->Email_fournisseur?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Fax_fournisseur">Fax_fournisseur</label>
            <input type="text" name="Fax_fournisseur"  id="Fax_fournisseur" value="<?=$fournisseur->Fax_fournisseur?>"/>
            <?php endforeach;?>
            <br>
            
            <input class="check" type="submit" value="cliquez"/>
        </div>
    </div> -->




<?php foreach($fournisseurs as $fournisseur):?>
<h1>Apporter des modifications à votre fournisseur <?=$fournisseur->Raison_sociale?> </h1>
<?php endforeach;?>

<form action="?controller=fournisseur&action=all_modifFournisseur&Id=<?=$fournisseur->Id_fournisseur?>" method="post">

 <div class="formContainer">
    <?php foreach($fournisseurs as $fournisseur):?>
        <div class="formContainer__box" >
            <label for="Code_fournisseur">Code_fournisseur</label>
            <input type="text" name="Code_fournisseur"  id="Code_fournisseur" value="<?=$fournisseur->Code_fournisseur?>"  />
            <label for="Raison_sociale">Raison_sociale</label>
            <input type="text" name="Raison_sociale"  id="Raison_sociale"  value="<?=$fournisseur->Raison_sociale?>"/>
            <label for="Rue_fournisseur">Rue_fournisseur</label>
            <input type="text" name="Rue_fournisseur"  id="Rue_fournisseur" value="<?=$fournisseur->Rue_fournisseur?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Code_postal">Code_postal</label>
            <input type="text" name="Code_postal"  id="Code_postal"  value="<?=$fournisseur->Code_postal?>"/>
            <label for="Localite">Localite</label>
            <input type="text" name="Localite"  id="Localite"   value="<?=$fournisseur->Localite?>"/>
            <label for="Pays">Pays</label>
            <input type="text" name="Pays"  id="Pays" value="<?=$fournisseur->Pays?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Tel_fournisseur">Tel_fournisseur</label>
            <input type="text" name="Tel_fournisseur"  id="Tel_fournisseur" value="<?=$fournisseur->Tel_fournisseur?>"/>
            <label for="Url_fournisseur">Url_fournisseur</label>
            <input type="text" name="Url_fournisseur"  id="Url_fournisseur" value="<?=$fournisseur->Url_fournisseur?>"/>
            <label for="Email_fournisseur">Email_fournisseur</label>
            <input type="text" name="Email_fournisseur"  id="Email_fournisseur" value="<?=$fournisseur->Email_fournisseur?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Fax_fournisseur">Fax_fournisseur</label>
            <input type="text" name="Fax_fournisseur"  id="Fax_fournisseur" value="<?=$fournisseur->Fax_fournisseur?>"/>
            <?php endforeach;?>
            <br>
            
            <input class="check" type="submit" value="cliquez"/>
        </div>
    </div>

</form>