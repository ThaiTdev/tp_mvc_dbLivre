<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/sass/style.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- SCRIPTS -->
    <script src="Content/index.js" defer></script>
    <script src="./js/commun.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>MVC</title>
</head>
<body>
    <?php
    require_once "Controllers/Controller.php";
    require_once "Models/Model.php";
    require_once "Utils/Header.php";
    $controllers = ["log"];
    $controller_default = "log";
    if(isset($_GET["controller"]) and in_array($_GET["controller"],$controllers)) {
        $name_controller = $_GET["controller"];
    } else {
        
        $name_controller = $controller_default;
    }
    $name_classe="controller_" . $name_controller;
    $name_fichier = "controllers/" . $name_classe . ".php";
      if(file_exists($name_fichier)) {

        require_once($name_fichier);
        $controller=new $name_classe();
    } else {

        exit("Error 404 : not found");
    }
    
    
          require_once "utils/Footer.php" ;
    ?>


</body>
</html>