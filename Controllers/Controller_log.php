<?php

class Controller_log extends Controller{
	public function action_default() {
		$this->action_home();
	}

	public function action_home() {
		$this->render("login");
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//cette fonction  verifie 
	public function action_traitement_login() {

		//ici je verifie si  $_POST['mail'], $_POST['password'] existe et si il ne sont pas null
		if(isset($_POST['mail'], $_POST['password']) && !empty($_POST['mail']) && !empty($_POST['password'])) {

			//ici je stock dans ma variable $mail la methode validateData($data, $type="") de la class mére et à la quelle je passe $_POST["mail"] en paramétre et comme c'est un mail, je le rajoute en deuxième paramètre afin que la methode lui passe la fonction intégrée htmlspecialchars().
			$mail = $this->validateData($_POST['mail'], 'mail');
			//ici je stock dans ma variable $mail la methode validateData($data, $type="") de la class mére et à la quelle je passe $_POST["passworld"] en paramétre.
			$password = $this->validateData($_POST['password']);
			// je fais appel à ma basse de données
			$m=Model::get_model();
			//dans ma variable $user je stock les données retour de ma requête éffectuée dans la class model , get_user_from_mail() à la quelle je passe la valeur de mon $_POST["mail"] en paramètre.
			$user = $m->get_user_from_mail($mail);
		


			//ici je vérifie  si différent de $user et different du hachage de passeword_verify()
			// if(!$user || !password_verify($password, $user->password)) {
			if(!$user) {
			
				//si $user et $user->passeWord son différents de true alors la variable $massage prend "Identifiants incorrectes"
				$message = "Identifiants incorrectes";
				//je créer un tableau associatif avec comme clé la chaine de caractère message et comme valeur la variable $message
				$data = ['message' => $message];
				//ici je fais render pour renvoyer ma vue login avec les data stocker dans message ,c'est à dire "Identifiants incorrectes"
				$this->render("login", $data);
			} else {
				//et si $user et $user->passeWord son  true alors on fait appel a la methode userConnetion() et on lui passe en paramètre la variable $user qui contient les données retour de ma requête éffectuée dans la class model , get_user_from_mail()
				$this->userConnection($user);
			}
		} else {
			$message = "Veuillez completer correctement le formulaire";
			$data = ['message' => $message];
			$this->render("login", $data);
		}
	}





//ici la methode renvoie la vue signin ou se trouve le formulaire d'inscription
	public function action_inscription() {
		$this->render("signin");
	}






//ici la méthode récupére les valeurs des names du formulaire de la vue signin
	public function action_traitement_inscription() {
		//ici je créer un tableau avec deux index ed la valeur 1 et 2  
		$possibleRank = [1, 2];
		//je vérifie si mes valeurs existes et si elles ne sont pas null
		if(isset($_POST['mail'], $_POST['password'], $_POST['password-confirm'], $_POST['rank']) && !empty($_POST['mail']) && !empty($_POST['password-confirm']) && !empty($_POST
		//in_array($_POST['rank'], $possibleRank) veut dire que ma valeur $_POST['rank'] doit être faire partie du tableau  "$possibleRank"  et soit elle doit être = à 1 ou à 2
		['password']) && in_array($_POST['rank'], $possibleRank)
		&& preg_match('@[a-zA-Z]@', $_POST['password'])
		&& preg_match('@[0-9]@', $_POST['password'])
		&& strlen($_POST['password']) >= 6) {

			//ici je retrouve la même chose que dans la fonction précédente
			$mail = $this->validateData($_POST['mail'], 'mail');
			$password = $this->validateData($_POST['password']);
			$passwordConfirm = $this->validateData($_POST['password-confirm']);
			$rank = $_POST['rank'];
			$m=Model::get_model();
			$user = $m->get_user_from_mail($mail);

			
			if($password !== $passwordConfirm) {
				$message = "Les mots de passe ne sont pas identiques";
			}
			if($user) {
				$message = "Cette adresse mail est déjà utilisée";
			}
			if(isset($message)) {
				$data = ['message' => $message];
				$this->render("signin", $data);
			} else {
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$user = $m->new_user($mail, $hash, $rank);
				$this->userConnection($user);
			}
		} else {
			$message = "Veuillez completer correctement le formulaire";
			$data = ['message' => $message];
			$this->render("signin", $data);
		}
	}

	private function userConnection($user) {
		$data = ['user' => $user];
		$_SESSION['rank'] = $user->rank;
		if($user->rank == 1) {
			//ici je rend la vue welcome_user.php qui contient le lien qui retour vers le dossier user
			$this->render("welcome_user", $data);
		} elseif($user->rank == 2) {
			//ici je rend la vue welcome_user.php qui contient le lien qui retour vers le dossier admin
			$this->render("welcome_admin", $data);
		}
	}
}