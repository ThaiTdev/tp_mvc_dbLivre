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

    
    ///////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////




    public function get_user_from_mail($mail) {
        $r = $this->db->prepare("SELECT * FROM user WHERE mail = :mail");
        $r->bindValue(':mail', $mail, PDO::PARAM_STR);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
        
    }

    public function new_user($mail, $password, $rank) {
        $r = $this->db->prepare("INSERT INTO user (mail, password, rank) VALUES (:mail, :password, :rank)");
        $r->bindValue(':mail', $mail, PDO::PARAM_STR);
        $r->bindValue(':password', $password, PDO::PARAM_STR);
        $r->bindValue(':rank', $rank, PDO::PARAM_STR);
        $r->execute();
        return $this->get_user_from_mail($mail);
    }
}










?>