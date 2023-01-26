<?php
   
    require_once('Contenir.php');
    if(isset($_POST['save-Contenir'])){
        $com = new Contenir(); //Instantiation  //Appel d'un constructeur
        $com->setNum_Commande($_POST['num']);
        $com->setReference_Produit($_POST['refP']);
        $com->setQuantite_Commande($_POST['quantite']);
        $com->save(); 
        header('Location: /project/listeCommande.php');    
    }

?>