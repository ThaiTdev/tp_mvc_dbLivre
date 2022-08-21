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

    public function action_all_formNewBook(){
        $this->render("all_formNewBook");
    }

    public function action_all_insertNewBook(){
        $tableau = [$_POST["ISBN"],
        $_POST["Titre_livre"],
        $_POST["Theme_livre"],
        (int)$_POST["Nbr_page_livre"],
        $_POST["Format_livre"],
        $_POST["Nom_auteur"],
        $_POST["Prenom_auteur"],
        $_POST["Editeur"],
        (int)$_POST["Annee_edition"],
        (int)$_POST["Prix_livre"],
        $_POST["Langue_livre"]];
        $m = Model::get_model();
        $data = ["newBook"=>$m->get_all_insertNewBook($tableau)];  
        $this->action_all_showBooks();
         
    }

    public function action_all_deleteBook(){
        $result = $_GET["Id_livre"];
        $m = Model::get_Model();
        $m->set_all_deleteBook($result);
        $this->action_all_showBooks();
    }



    public function action_all_checkBook(){
        $result = $_GET["Id_livre"];
        $m = Model::get_Model();
        $data = ["livres"=>$m->get_all_checkBook($result)];
        $this->render("all_checkBook",$data);
        

    }

 
    public function action_all_updateBook(){
        $tableau = [
        $_POST["ISBN"],
        $_POST["Titre_livre"],
        $_POST["Theme_livre"],
        $_POST["Nbr_page_livre"],
        $_POST["Format_livre"],
        $_POST["Nom_auteur"],
        $_POST["Prenom_auteur"],
        $_POST["Editeur"],
        $_POST["Annee_edition"],
        $_POST["Prix_livre"],
        $_POST["Langue_livre"],
        $_GET["Id_livre"]
    ];
    $m = Model::get_model();
    $m->set_all_updateBook($tableau);
    $this->action_all_showBooks();

    }

    public function action_supprimer_livre(){
        $id=$_GET['id'];
        $m = Model::get_Model();
        $m->set_supprimer_livre($id);
        $this->action_all_showBooks();

    }
    }
 