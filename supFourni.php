<?php
    require_once('Fournisseur.php');   //require    //include
    
    $f = new Fournisseur(); //Instantiation

    $f->setId_Fournisseur($_GET['id']); 

    $f->delete(); //Appel de la methode delete
    header('Location: /Project/listeFournisseur.php');    
?>