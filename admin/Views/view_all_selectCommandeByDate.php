<h1>Choose by date</h1>


<form action="?controller=commander&action=all_showCommandeByDate" method="post">
    <select name="commande" id="commande">
        <?php foreach($dates as $date):?>
        <option value="<?=$date->Date_achat?>"><?=$date->Date_achat?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="valider">
</form>