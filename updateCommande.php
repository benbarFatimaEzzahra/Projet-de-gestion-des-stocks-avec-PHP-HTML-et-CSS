<?php
    require_once('Commande.php');   //require    //include
    
    if(isset($_POST['update-commande'])){
        
        $c = new Commande(); //Instantiation  //Appel d'un constructeur
        $c->setNum($_GET['num']); 
        $c->setId_Client($_POST['idCli']); 
        $c->setDate($_POST['dateC']);
        $c->update(); 
        
        header('Location: /project/listeCommande.php');   

    }

?>