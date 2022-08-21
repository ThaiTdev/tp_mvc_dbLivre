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
  


    }











