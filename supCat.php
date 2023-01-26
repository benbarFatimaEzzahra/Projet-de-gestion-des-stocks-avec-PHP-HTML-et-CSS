<?php
    require_once('Categorie.php');   //require    //include
    
    $cat = new Categorie(); //Instantiation

    $cat->setReference($_GET['ref']); //Appel du setter de la reference

    $cat->delete(); //Appel de la methode delete
    header('Location: /Project/listeCat.php');    
?>