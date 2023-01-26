<?php
    require_once('Commande.php');   //require    //include
    
    $com = new Commande(); //Instantiation

    $com->setNum($_GET['num']); 

    $com->delete(); //Appel de la methode delete
    header('Location: /Project/listeCommande.php');    
?>