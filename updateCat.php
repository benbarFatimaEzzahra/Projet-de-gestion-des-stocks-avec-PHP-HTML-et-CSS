<?php
    require_once('Categorie.php');   //require    //include
    
    if(isset($_POST['update-cat'])){

        $c = new Categorie(); //Instantiation  //Appel d'un constructeur
        $c->setReference($_GET['refC']); 
        $c->setDescription($_POST['descriptionC']); 
        $c->update(); 

        header('Location: /project/listeCat.php');   

    }

?>