<?php 


class Controller_livre extends Controller {

    public function action_default(){
        $this->action_home();
    }

    public function action_home(){
        $this->render("home");
    }

    public function action_all_showBooks(){
        $m = Model::get_Model();
        $data = ["livres"=>$m->get_all_showBooks()];
        $this->render("all_showBooks",$data);

    }
    public function action_all_selectByTitle(){
        $m = Model::get_Model();
        $data = ["titles"=>$m->get_all_selectByTitle()];
        $this->render("all_selectByTitle",$data);
    }
    public function action_all_afficheByTitle(){
        $result = $_POST["title"];
        $m = Model::get_model();
        $data = ['titles'=>$m->get_all_afficheByTitle($result)];
        $this->render("all_afficheByTitle",$data);
    }
    public function action_all_selectByAuteur(){
        $m = Model::get_Model();
        $data = ["auteurs"=>$m->get_all_selectByAuteur()];
        $this->render("all_selectByAuteur",$data);
    }
    public function action_all_afficheByAuteur(){
        $result = explode("_",$_POST["auteurs"]);
        $m = Model::get_Model();
        $data = ["auteurs"=>$m->get_all_afficheByAuteur($result[0],$result[1])];
        $this->render("all_afficheByAuteur",$data);
    }


    public function action_all_selectByEditeur(){
    $m = Model::get_Model();
    $data = ["editeurs"=>$m->get_all_selectByEditeur()];
    $this->render("all_selectByEditeur",$data);
    }

    public function action_all_afficheByEditeur(){
        $result = $_POST["editors"];
        $m = Model::get_model();
        $data = ["editeurs"=>$m->get_all_afficheByEditeur($result)];
        $this->render("all_afficheByEditeur",$data);
    }

  

}
  