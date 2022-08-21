<form action="?controller=log&action=traitement_inscription" method="POST">
    <h1>Connectez vous à la basse de données<span>Entrez vos informations pour vous inscrire :</span></h1>
    <?= (isset($message)) ? "<p>$message</p>" : "" ?>
    <div class="mail-box">
        <label for="mail">Adresse mail</label>
        <input type="mail" name="mail" id="mail">
    </div>
    <div class="pass-box">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Votre mot de passe doit contenir au minimum une lettre, 1 chiffre et 6 caratères" minlength="6"  maxlength="15" required>
         <button class="unmask" type="button" title="Mask/Unmask password to check content"></button></input>
    </div>
    <div class="pass-box">
        <label for="password-confirm">Confirmation mot de passe</label>
        <input type="password" name="password-confirm" id="password-confirm" required pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Votre mot de passe doit contenir au minimum une lettre, 1 chiffre et 6 caratères" minlength="6"  maxlength="15">
        <button class="unmask" type="button" title="Mask/Unmask password to check content"></button></input>
    </div>
    <div class="pass-box">
        <label for="radio-admin">Administrateur</label>
        <input type="radio" name="rank" id="radio-admin" value=2 required>
        <label for="radio-user">Utilisateur</label>
        <input type="radio" name="rank" id="radio-user" value=1 required>
    </div>
    <div class="pass-box"> 
        <input type="submit" value="S'inscrire">
    </div>
    <div>
        <a href="?controller=log&action=home">Connectez-vous</a>
    </div>
</form>