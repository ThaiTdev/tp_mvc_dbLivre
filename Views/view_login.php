<form action="?controller=log&action=traitement_login" method="POST">
    <h1>Connectez vous à la basse de données<span>Entrez vos identifiants pour vous connecter :</span></h1>
    <?= (isset($message)) ? "<p>$message</p>" : "" ?>
    <div class="mail-box">
        <label for="mail">Adresse mail</label>
        <input type="mail" name="mail" id="mail" required>
    </div>
    <div class="pass-box">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required pattern="(?=.*\d)(?=.*[a-z]).{6,}"    minlength="6"  maxlength="15" > 
         <button class="unmask" type="button" title="Mask/Unmask password to check content"></button></input>
    </div>
    <div>
        <input type="submit" value="Se connecter">
    </div>
    <div>
        <a href="?controller=log&action=inscription">Inscrivez-vous</a>
    </div>
</form>

