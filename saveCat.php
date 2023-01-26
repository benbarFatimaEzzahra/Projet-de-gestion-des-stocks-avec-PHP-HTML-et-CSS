<?php
    require_once('Categorie.php');   //require    //include
    
    if(isset($_POST['save-categorie'])){
        $cat = new Categorie(); //Instantiation  //Appel d'un constructeur

        $cat->setReference($_POST['refC']); //Appel du setter du nom
        $cat->setDescription($_POST['descriptionC']); //Appel du setter du titre

        $cat->save(); //Appel de la methode save
        
        header('Location: /project/listeCat.php');    
    }

?>