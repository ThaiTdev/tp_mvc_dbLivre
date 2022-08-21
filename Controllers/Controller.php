<?php

abstract class Controller {

    abstract public function action_default();

    public function __construct() {

        if (isset($_GET['action']) and method_exists($this, "action_".$_GET['action'])) {

            $action="action_".$_GET['action'];
            $this->$action();
        } else {

            $this->action_default();
        }
    }

    protected function render ($vue, $data=[]) {

        extract($data);
        $file_name="Views/view_" . $vue . ".php";
        if (file_exists($file_name)) {

            require($file_name);
        } else {

            $this->action_error("pas de vue");
        }
    }

    protected function action_error($message) {

        $data=['error'=>$message];
        $this->render('error', $data);
        die();
    }

    //je créer une methode protected qui pourra être instancié dans la classe fille
     protected function validateData($data, $type=""){
        //ici je passe au paramétre  $data les methodes intégrèes suivantes.
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

       //et si a la place de la variable $type je recupère un mail alors je lui passe la vérife filter_var($data, FILTER_VALIDATE_EMAIL) 
        if($type === 'mail') {
            $data = filter_var($data, FILTER_VALIDATE_EMAIL);
        }
        //puis je retourn ma fonction
        return $data;
    }
}




?>