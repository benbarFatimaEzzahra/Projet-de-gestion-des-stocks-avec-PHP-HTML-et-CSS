<?php
    require_once('Fournisseur.php');   //require    //include
    
    if(isset($_POST['update-fournisseur'])){

        $f = new Fournisseur(); //Instantiation  //Appel d'un constructeur

        $f->setId_Fournisseur($_GET['idF']); 
        $f->setNom_Fournisseur($_POST['nomF']); 
        $f->setPrenom_Fournisseur($_POST['prenomF']); 
         $f->setAdresse_Fournisseur($_POST['adresseF']);
        $f->setTel_Fournisseur($_POST['telF']); 
         $f->setMail_Fournisseur($_POST['mailF']);

        $f->update(); 
          
       
        header('Location: /project/listeFournisseur.php');   

    }

?>