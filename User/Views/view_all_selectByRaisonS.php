<h1>choose by company</h1>


<form action="?controller=fournisseur&action=all_afficheByRaisonS" method="post">
    <select name="raisonS" id="raisonS">
        <?php foreach($raisonS as $raison):?>
            <option value="<?=$raison->Raison_sociale;?>"><?=$raison->Raison_sociale;?></option>
            <?php endforeach;?>
    </select>
    <input type="submit" value="validez">
</form>