<h1>Choose by Editor</h1>

<form action="?controller=livre&action=all_afficheByEditeur" method="post">
    <select name="editors" id="editors">
        <?php foreach($editeurs as $editeur):?>
            <option value="<?=$editeur->Editeur;?>"><?=$editeur->Editeur;?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="cliquez"/>
</form>