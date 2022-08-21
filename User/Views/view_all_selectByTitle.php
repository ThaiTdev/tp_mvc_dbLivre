<h1>Choose By Title</h1>


<form action="?controller=livre&action=all_afficheByTitle" method="post">
    <select name="title" id="title">
        <?php foreach($titles as $title):?>
            <option value="<?=$title->Titre_livre?>"><?=$title->Titre_livre?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="validez">
</form>