<h1>Choose by fournisseur</h1>


<form action="?controller=commander&action=all_showCommandeByFournisseur" method="post">
    <select name="fournisseur" id="fournisseur">
        <?php foreach($fournisseurs as $fournisseur):?>
        <option value="<?=$fournisseur->Raison_sociale?>"><?=$fournisseur->Raison_sociale?></option>
         <?php endforeach;?>
    </select>
    <input type="submit" value="validez">
</form>
