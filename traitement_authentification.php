<?php

    $tbl_classes = scandir('../classes');
    foreach ($tbl_classes as $oneclass) {
        if($oneclass != '.' && $oneclass != '..') include("../classes/".$oneclass);
    }

if (isset($_POST["champ_login"],$_POST["champ_mdp"])) {
  
    
    $login = $_POST["champ_login"];
    $mdp = $_POST["champ_mdp"];


    $obj = new Client("empty");

    $result_admin = $obj->Select_membre($login, $mdp);

    if (count($result_admin ) > 0){
        //on peut établir la session
        session_start();
        $_SESSION["utilisateur"] = $login;

        header("location:../index.php?page=produit");
        
    }else{
        header("location:../index.php?page=connexion");
    }
    
    
} else {
    
    header("location:../index.php?page=connexion");

    
}

?>