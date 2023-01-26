<?php
    require_once('Fournisseur.php');   //require    //include
    
    if(isset($_POST['save-fournisseur'])){
        $f = new Fournisseur(); //Instantiation  //Appel d'un constructeur

        $f->setId_Fournisseur($_POST['idF']); //Appel du setter du nom
        $f->setNom_Fournisseur($_POST['nomF']); //Appel du setter du titre
        $f->setPrenom_Fournisseur($_POST['prenomF']); //Appel du setter du message
        $f->setAdresse_Fournisseur($_POST['adresseF']); //Appel du setter du email
        $f->setTel_Fournisseur($_POST['telF']); //Appel du setter du email
        $f->setMail_Fournisseur($_POST['mailF']); //Appel du setter du email

        $f->save(); //Appel de la methode save
        header('Location: listeFournisseur.php');    
    }

?>