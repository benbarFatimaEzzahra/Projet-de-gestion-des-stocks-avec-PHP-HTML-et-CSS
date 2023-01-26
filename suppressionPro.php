<?php
    require_once('Produit.php');   //require    //include
    
    $prd = new Produit(); //Instantiation

    $prd->setReference_Produit($_GET['ref']); //Appel du setter de la reference

    $prd->delete(); //Appel de la methode delete
    header('Location: /Project/listeProduit.php');    
?>