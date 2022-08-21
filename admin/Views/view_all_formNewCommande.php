<h1>Entrer votre nouvelle commande</h1>


<form action="?controller=commander&action=all_insertCommande" method="post">
    <div class="formContainer">
            <div class="formContainer__box" >
                <label for="livre">choose company</label>
                <select name="fournisseur" id="fournisseur">
                    <?php foreach($rsRecup as $valeur):?>
                        <option value="<?=$valeur->Id_fournisseur?>"><?=$valeur->Raison_sociale?></option>
                    <?php endforeach;?>
                </select>
                <br>
                <label for="livre">choose title book</label>
                <select name="livre" id="livre" >
                    <?php foreach($titleRecup as $valeur):?>
                        <option value="<?=$valeur->Id_livre?>"><?=$valeur->Titre_livre?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="formContainer__box" >
                <label for="Date_achat">Date_achat</label>
                <input type="text" id="Date_achat" name="Date_achat">

                <label for="Prix_achat">Prix_achat</label>
                <input type="text" id="Prix_achat" name="Prix_achat">

                <label for="Nbr_exemplaires">Nbr_exemplaires</label>
                <input type="text" id="Nbr_exemplaires" name="Nbr_exemplaires">

                <br>
                <input type="submit" value="cliquez">
            </div>
    </div>
</form>