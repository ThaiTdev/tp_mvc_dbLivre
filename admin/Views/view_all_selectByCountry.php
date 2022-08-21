<h1>Choose by country</h1>

<form action="?controller=fournisseur&action=all_afficheByCountry" method="post">
    <select name="pays" id="pays">
        <?php foreach($countrys as $country):?>
        <option value="<?=$country->Pays?>"><?=$country->Pays?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="valider">
</form>