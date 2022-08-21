<h1>Entrer votre nouveau livre</h1>


<form action="?controller=livre&action=all_insertNewBook" method="post"  >
    <div class="formContainer">
        <div class="formContainer__box" >
            <label for="ISBN">ISBN</label>
            <input type="text" name="ISBN"  id="ISBN"/>
            <label for="Titre_livre">Titre_livre</label>
            <input type="text" name="Titre_livre"  id="Titre_livre"/>
            <label for="Theme_livre">Theme_livre</label>
            <input type="text" name="Theme_livre"  id="Theme_livre"/>
        </div>
        <div class="formContainer__box">
            <label for="Nbr_page_livre">Nbr_page_livre</label>
            <input type="text" name="Nbr_page_livre"  id="Nbr_page_livre"/>
            <label for="Format_livre">Format_livre</label>
            <input type="text" name="Format_livre"  id="Format_livre"/>
            <label for="Nom_auteur">Nom_auteur</label>
            <input type="text" name="Nom_auteur"  id="Nom_auteur"/>
        </div>
        <div class="formContainer__box">
            <label for="Prenom_auteur">Prenom_auteur</label>
            <input type="text" name="Prenom_auteur"  id="Prenom_auteur"/>
            <label for="Editeur">Editeur</label>
            <input type="text" name="Editeur"  id="Editeur"/>
            <label for="Annee_edition">Annee_edition</label>
            <input type="text" name="Annee_edition"  id="Annee_edition"/>
        </div>
        <div class="formContainer__box">
            <label for="Prix_livre">Prix_livre</label>
            <input type="text" name="Prix_livre"  id="Prix_livre"/>
            <label for="Langue_livre">Langue_livre</label>
            <input type="text" name="Langue_livre"  id="Langue_livre"/>
            <br>
            
            <input class="check" type="submit" value="cliquez"/>
        </div>
    </div>
</form> 