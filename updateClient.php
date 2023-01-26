<?php
    require_once('Client.php');   //require    //include
    
    if(isset($_POST['update-client'])){

        $cli = new Client(); //Instantiation  //Appel d'un constructeur

        $cli->setId_Client($_GET['idCli']); //Appel du setter du nom
        $cli->setNom_Client($_POST['nomCli']); //Appel du setter du titre
        $cli->setPrenom_Client($_POST['prenomCli']); //Appel du setter du message
        $cli->setMail_Client($_POST['mailCli']); //Appel du setter du email
        $cli->setTel_Client($_POST['telCli']); //Appel du setter du email
        $cli->setAdresse_Client($_POST['adresseCli']); //Appel du setter du email


        $cli->update(); 
  

        header('Location:  /project/listeClient.php');   

    }

?>