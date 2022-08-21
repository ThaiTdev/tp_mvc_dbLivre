
  <?php foreach($livres as $livre):?>
<h1>Modifier votre livre <?=$livre->Titre_livre?>  </h1>
  <?php endforeach;?>


<form action="?controller=livre&action=all_updateBook&Id_livre=<?=$livre->Id_livre?>" method="post"  >
    <div class="formContainer">
        <?php foreach($livres as $livre):?>
        <div class="formContainer__box" >
            <label for="ISBN">ISBN</label>
            <input type="text" name="ISBN"  id="ISBN"  value="<?=$livre->ISBN?>" />
            <label for="Titre_livre">Titre_livre</label>
            <input type="text" name="Titre_livre"  id="Titre_livre" value="<?=$livre->Titre_livre?>"/>
            <label for="Theme_livre">Theme_livre</label>
            <input type="text" name="Theme_livre"  id="Theme_livre" value="<?=$livre->Theme_livre?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Nbr_page_livre">Nbr_page_livre</label>
            <input type="text" name="Nbr_page_livre"  id="Nbr_page_livre" value="<?=$livre->Nbr_page_livre?>"/>
            <label for="Format_livre">Format_livre</label>
            <input type="text" name="Format_livre"  id="Format_livre" value="<?=$livre->Format_livre?>"/>
            <label for="Nom_auteur">Nom_auteur</label>
            <input type="text" name="Nom_auteur"  id="Nom_auteur" value="<?=$livre->Nom_auteur?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Prenom_auteur">Prenom_auteur</label>
            <input type="text" name="Prenom_auteur"  id="Prenom_auteur" value="<?=$livre->Prenom_auteur?>"/>
            <label for="Editeur">Editeur</label>
            <input type="text" name="Editeur"  id="Editeur" value="<?=$livre->Editeur?>"/>
            <label for="Annee_edition">Annee_edition</label>
            <input type="text" name="Annee_edition"  id="Annee_edition" value="<?=$livre->Annee_edition?>"/>
        </div>
        <div class="formContainer__box">
            <label for="Prix_livre">Prix_livre</label>
            <input type="text" name="Prix_livre"  id="Prix_livre" value="<?=$livre->Prix_livre?>"/>
            <label for="Langue_livre">Langue_livre</label>
            <input type="text" name="Langue_livre"  id="Langue_livre" value="<?=$livre->Langue_livre?>"/>
            <br>
            <?php endforeach;?>
            
            <input class="check" type="submit" value="cliquez"/>
        </div>
    </div>
</form> 