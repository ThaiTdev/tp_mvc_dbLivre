

<h2>Choose by localite</h2>

<form action="?controller=fournisseur&action=all_afficheByLocalite"  method="post" >
    <select name="localite" id="localite">
        <?php foreach($localites as $localite):?>
        <option value="<?=$localite->Localite?>"><?=$localite->Localite?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="validez">
</form>