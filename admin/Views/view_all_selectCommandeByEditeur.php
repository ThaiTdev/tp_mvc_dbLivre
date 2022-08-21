<h1>Choose by editor</h1>



<form action="?controller=commander&action=all_showCommandeByEditor"  method="post" >
    <select name="editor" id="editor">
        <?php foreach($editeurs as $editeur):?>
        <option value="<?=$editeur->Editeur?>"><?=$editeur->Editeur?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="valider">

</form>