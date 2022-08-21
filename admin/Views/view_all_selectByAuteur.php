<h1>Choose By Auteur</h1>


<form action="?controller=livre&action=all_afficheByAuteur" method="post">
    <select name="auteurs" id="auteurs">
        <?php foreach($auteurs as $auteur):?>
            <option value="<?=$auteur->Nom_auteur?>_<?=$auteur->Prenom_auteur?>"><?=$auteur->Nom_auteur?> <?=$auteur->Prenom_auteur?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="validez">
</form>