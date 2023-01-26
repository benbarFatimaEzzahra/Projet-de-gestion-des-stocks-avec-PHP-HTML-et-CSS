<?php
    require_once('Commande.php');   //require    //include
    
    if(isset($_POST['save-Commande'])){
        $com = new Commande(); //Instantiation  //Appel d'un constructeur

        $com->setNum($_POST['num']); //Appel du setter du nom
        $com->setId_Client($_POST['idCli']); //Appel du setter du titre
        $com->setDate($_POST['dateC']); //Appel du setter du message
        
        $com->save(); //Appel de la methode save
        header('Location: /project/ajoutContenir.php');    
    }

?>