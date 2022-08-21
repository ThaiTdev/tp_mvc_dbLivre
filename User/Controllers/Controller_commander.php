<?php 


class Controller_commander extends controller {
    public function action_default(){
        $this->action_home();
    }


    public function action_home(){
        $this->render('home');
    }  



    public function action_all_showCommander(){
        $m = Model::get_model();
        $data = ["commandes"=>$m->get_all_showCommander()];
        $this->render("all_showCommander",$data);
    }




    public function action_all_selectCommandeByEditeur(){
        $m = Model::get_Model();
        $data = ["editeurs"=>$m->get_all_selectCommandeByEditeur()];
        $this->render("all_selectCommandeByEditeur",$data);
    }
    public function action_all_showCommandeByEditor() {
        $result = $_POST["editor"];
        $m = Model::get_Model();
        $data = ["commandes"=>$m->get_all_showCommandeByEditor($result)];
        $this->render("all_showCommandeByEditor",$data);

    }

    public function action_all_selectCommandeByFournisseur(){
        $m = Model::get_Model();
        $data = ["fournisseurs"=>$m->get_all_selectCommandeByFournisseur()];
        $this->render("all_selectCommandeByFournisseur", $data);
    }




     public function action_all_showCommandeByFournisseur(){
        $result = $_POST["fournisseur"];
        $m = Model::get_Model();
        $data = ["commandes"=>$m->set_all_showCommandeByFournisseur($result)];
        $this->render("all_showCommandeByFournisseur",$data);
     }

    public function action_all_selectCommandeByDate(){
        $m = Model::get_Model();
        $data = ["dates"=>$m->get_all_selectCommandeByDate()];
        $this->render("all_selectCommandeByDate",$data);

    }
    public function action_all_showCommandeByDate(){
        $result = $_POST["commande"];
        $m = Model::get_Model();
        $data = ["dates"=>$m->set_all_showCommandeByDate("$result")];
        $this->render("all_showCommandeByDate",$data);

    }


    


}