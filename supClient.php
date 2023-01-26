<?php
    require_once('Client.php');   //require    //include
    
    $cli = new Client(); //Instantiation

    $cli->setId_Client($_GET['id']); 

    $cli->delete(); //Appel de la methode delete
    header('Location: /Project/listeClient.php');    
?>