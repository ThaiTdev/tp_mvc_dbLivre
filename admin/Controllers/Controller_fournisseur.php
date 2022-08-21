<?php 



class controller_fournisseur extends controller {

    public function action_default(){
        $this->action_home();
    }
    public function action_home() {
        $this->render("home");
    }

    public function action_all_showFournisseur(){
        $m = Model::get_Model();
        $data = ["fournisseurs"=>$m->get_all_showFournisseur()];
        $this->render("all_showFournisseur",$data);
    }

    public function action_all_selectByRaisonS() {
        $m = Model::get_Model();
        $data = ["raisonS"=>$m->get_all_selectByRaisonS()];
        $this->render("all_selectByRaisonS",$data);
    }


    public function action_all_afficheByRaisonS(){
        $result = $_POST["raisonS"];
        $m =Model::get_model();
        $data = ["raisonS"=>$m->get_all_afficheByRaisonS($result)];
        $this->render("all_afficheByRaisonS",$data);

    }

    public function action_all_selectByLocalite(){
        $m = Model::get_Model();
        $data = ["localites"=>$m->get_all_selectByLocalite()];
        $this->render("all_selectByLocalite",$data);
    }

    public function action_all_afficheByLocalite(){
        $result = $_POST["localite"];
        $m = Model::get_Model();
        $data = ["localites"=>$m->set_all_afficheByLocalite($result)];
        $this->render("all_afficheByLocalite",$data);
    }


    public function action_all_selectByCountry(){

        $m = Model::get_Model();
        $data = ["countrys"=>$m->get_all_selectByCountry()];
        $this->render("all_selectByCountry",$data);

    }
    public function action_all_afficheByCountry() {
        $result = $_POST["pays"];
        $m =Model::get_Model();
        $data = ["countrys"=>$m->get_all_afficheByCountry( $result)];
        $this->render("all_afficheByCountry",$data);
    }
    public function action_all_formNewFournisseur(){
        $this->render("all_formNewFournisseur");

    }


    public function action_all_insertFournisseur(){
        $tableau = [$_POST["Code_fournisseur"],$_POST["Raison_sociale"],$_POST["Rue_fournisseur"],$_POST["Code_postal"],$_POST["Localite"],$_POST["Pays"],$_POST["Tel_fournisseur"],$_POST["Url_fournisseur"],$_POST["Email_fournisseur"],$_POST["Fax_fournisseur"]];
        $m = Model::get_Model();
        $m->get_all_insertFournisseur($tableau);
        echo "Félicitation vous entrée est validée";
        $this->action_all_showFournisseur();

    }

public function action_supprimer_fournisseur() {
		$id=$_GET['id'];
		$m=Model::get_model();
        $deleted = $m->delete_fournisseur($id);
		$this->action_all_showFournisseur(true, $deleted);
	}





public function action_all_CheckFournisseur() {
    $id = $_GET['Id'];
    $m = Model::get_model();
    $data = ["fournisseurs"=>$m->get_all_CheckFournisseur($id)];
    $this->render("all_CheckFournisseur",$data);
   
}
  public function action_all_modifFournisseur(){
       
        $tableau = [
            
        $_POST["Code_fournisseur"],

        $_POST["Raison_sociale"],

        $_POST["Rue_fournisseur"],

        $_POST["Code_postal"],

        $_POST["Localite"],

        $_POST["Pays"],

        $_POST["Tel_fournisseur"],

        $_POST["Url_fournisseur"],

        $_POST["Email_fournisseur"],

        $_POST["Fax_fournisseur"],

        $_GET["Id"],
       
        ];
       
        $m = Model::get_Model();
        $m->set_modifFournisseur($tableau) ;
        $this->action_all_showFournisseur();

    }
}
