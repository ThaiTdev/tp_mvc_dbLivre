<?php


class Model {
    private $db;
    private static $instance = null;


    private function __construct() {
        $DB_BDN ='mysql:host=localhost;dbname=bdlivre';
        $DB_USER  ="root";
        $DB_PASS ="";
        $this->db = new PDO($DB_BDN,$DB_USER,$DB_PASS);
        $this->db->query('SET NAMES utf8');
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public static function get_Model() {

        if(is_null(self::$instance)){
            self::$instance = new Model();
        }
        return self::$instance;
    }


    /************************************livre****************************** */

    public function get_all_showBooks(){
        $result = $this->db->prepare("SELECT * FROM livre ORDER BY Titre_livre");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
      public function get_all_selectByTitle(){
        $result = $this->db->prepare("SELECT Titre_livre FROM livre ");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
     public function get_all_afficheByTitle($titre){
        $result = $this->db->prepare("SELECT * FROM livre WHERE Titre_livre = :titre");
        $result->bindValue(':titre',$titre);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
     }
      public function get_all_selectByAuteur(){
        $result = $this->db->prepare("SELECT Nom_auteur,Prenom_auteur FROM livre");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
      }
      public function get_all_afficheByAuteur($nom,$prenom){
        $result = $this->db->prepare("SELECT * FROM livre WHERE Nom_auteur = :nomAuteur AND Prenom_auteur = :prenomAuteur");
        $result->bindValue(":nomAuteur",$nom);
        $result->bindValue(":prenomAuteur",$prenom);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
      }
   public function get_all_selectByEditeur(){
    $result = $this->db->prepare("SELECT DISTINCT Editeur FROM livre ORDER by Editeur ");
    $result->execute();
    return $result->fetchAll(PDO::FETCH_OBJ);
   }


   public function get_all_afficheByEditeur($editor){
    $result = $this->db->prepare("SELECT * FROM livre WHERE Editeur = :editor");
    $result->bindValue(":editor",$editor);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_OBJ);
   }


   public function get_all_insertNewBook($tableau){
    $result = $this->db->prepare("INSERT INTO livre (ISBN,Titre_livre,Theme_livre,Nbr_page_livre,Format_livre,Nom_auteur,Prenom_auteur,Editeur,Annee_edition,Prix_livre,Langue_livre)  VALUE (?,?,?,?,?,?,?,?,?,?,?)");
    $result->execute($tableau);
      }


      public function set_all_deleteBook($result){
        $req = $this->db->prepare("DELETE FROM livre WHERE Id_livre = :isbn");
        $req->bindValue(":isbn",$result);
        $req->execute();
      }



      public function get_all_checkBook($result){
        $req = $this->db->prepare("SELECT * FROM livre WHERE Id_livre = :result");
        $req->bindValue(":result",$result);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
      }
      
       public function set_all_updateBook($tableau){
        $req = $this->db->prepare("UPDATE livre SET  
         ISBN = ?,
         Titre_livre = ?,
         Theme_livre = ? , 
         Nbr_page_livre= ? ,
         Format_livre = ?,
         Nom_auteur = ?,
         Prenom_auteur = ?,
         Editeur = ?,
         Annee_edition = ?,
         Prix_livre = ?,
         Langue_livre= ?
         WHERE Id_livre = ? ");
         $req->execute($tableau);
         
       }








  























/******************************fournisseur*************************/

public function get_all_showFournisseur(){
    $result = $this->db->prepare("SELECT * FROM fournisseur");
    $result->execute();
     return $result->fetchAll(PDO::FETCH_OBJ);
}


public function get_all_selectByRaisonS() {
    $result = $this->db->prepare("SELECT DISTINCT Raison_sociale FROM fournisseur");
    $result->execute();
    return  $result->fetchAll(PDO::FETCH_OBJ);
}


public function get_all_afficheByRaisonS($rs){
    $req = $this->db->prepare("SELECT * FROM fournisseur WHERE Raison_sociale = :rs");
    $req->bindValue(":rs",$rs);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);

}

public function get_all_selectByLocalite() {
    $req = $this->db->prepare("SELECT DISTINCT Localite FROM fournisseur ORDER BY Localite");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}

public function set_all_afficheByLocalite($result){
    $req = $this->db->prepare("SELECT * FROM fournisseur WHERE Localite = :localiter ");
    $req->bindValue(":localiter",$result);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}


public function get_all_selectByCountry() {
    $req = $this->db->prepare("SELECT DISTINCT Pays FROM fournisseur ORDER BY Pays");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}
public function get_all_afficheByCountry($result) { 
    $req = $this->db->prepare("SELECT * FROM fournisseur WHERE Pays = :result");
    $req->bindValue(":result",$result);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}



public function  get_all_insertFournisseur($tableau){
    $req = $this->db->prepare("INSERT INTO fournisseur (Code_fournisseur,Raison_sociale,Rue_fournisseur,Code_postal,Localite,Pays,Tel_fournisseur,Url_fournisseur,Email_fournisseur,Fax_fournisseur) VALUE (?,?,?,?,?,?,?,?,?,?)");
    $req->execute($tableau);
}






    // DELETE FOURNISSEUR
    public function delete_fournisseur($id) {
        $r = $this->db->prepare( "DELETE FROM fournisseur WHERE Id_fournisseur = :id");
        $r->bindValue(':id', $id, PDO::PARAM_INT);
        return $r->execute();
    }

    

// check fournisseur for update
public function get_all_CheckFournisseur($param){
    $req = $this->db->prepare("SELECT * FROM fournisseur WHERE Id_fournisseur = :parame");
    $req->bindValue(":parame",$param);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);

}

    public function set_modifFournisseur($tableau ){
        $req = $this->db->prepare( "UPDATE fournisseur SET 
        Code_fournisseur = ?,
         Raison_sociale = ?,
          Rue_fournisseur = ?,
           Code_postal = ?,
            Localite = ?,
             Pays = ?,
              Tel_fournisseur = ?,
               Url_fournisseur = ?,
                Email_fournisseur = ?,
                 Fax_fournisseur = ?
        WHERE Id_fournisseur =  ?");
        $req->execute($tableau);
    
    }
  

/******************************Commander*************************/


public function get_all_showCommander(){
    $result = $this->db->prepare("SELECT * FROM commander C INNER JOIN livre L ON C.id_livre = L.id_livre 
    INNER JOIN fournisseur F ON C.id_fournisseur = F.id_fournisseur ");
    $result->execute();
    return $result->fetchAll(PDO::FETCH_OBJ);

}

public function get_all_selectCommandeByEditeur(){
    $req = $this->db->prepare("SELECT DISTINCT Editeur FROM commander C INNER JOIN livre L ON  C.Id_livre = L.Id_livre ORDER BY Editeur");
    $req->exEcute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}
public function get_all_showCommandeByEditor($edit){
    $req = $this->db->prepare("SELECT * FROM commander C INNER JOIN livre L ON C.Id_livre = L.Id_livre  INNER JOIN fournisseur F ON C.Id_fournisseur = F.Id_fournisseur WHERE Editeur = :edit ORDER BY Editeur ");
    $req->bindValue(":edit",$edit);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}


public function get_all_selectCommandeByFournisseur(){
    $result = $this->db->prepare("SELECT DISTINCT Raison_sociale FROM commander C INNER JOIN fournisseur F ON C.Id_fournisseur = F.Id_fournisseur ORDER BY Raison_sociale");
    $result->execute();
    return $result->fetchAll(PDO::FETCH_OBJ);

   }


public function set_all_showCommandeByFournisseur($result){
    $req = $this->db->prepare("SELECT * FROM commander C INNER JOIN fournisseur f on C.id_fournisseur = F.id_fournisseur INNER JOIN livre L ON C.Id_livre = L.Id_livre WHERE Raison_sociale = :rs");
    $req->bindValue(":rs", $result);
    $req->execute();
    
    return $req->fetchAll(PDO::FETCH_OBJ);

}

public function get_all_selectCommandeByDate(){
    $req = $this->db->prepare("SELECT Date_achat FROM commander ");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}
public function set_all_showCommandeByDate($result){
    $req = $this->db->prepare("SELECT * FROM commander C INNER JOIN livre L ON C.Id_livre = L.Id_livre INNER JOIN  fournisseur F ON  C.Id_fournisseur = F.id_fournisseur WHERE Date_achat = :result");
    $req->bindValue(":result",$result);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}



public function set_all_insertCommande($tableau){
    $req = $this->db->prepare("INSERT INTO commander (Id_fournisseur,Id_livre,Date_achat,Prix_achat,Nbr_exemplaires ) VALUE (?,?,?,?,?)");
    $req->execute($tableau);
     }




    public function set_supprimer_livre($id){
        $req = $this->db->prepare("DELETE  FROM livre WHERE Id_livre = :id");
        $req->bindValue(":id",$id, PDO::PARAM_INT);
         return $req->execute();
        

    }

}






?>