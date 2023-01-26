<?php
    require_once('Produit.php');   //require    //include
    
    if(isset($_POST['update-pro'])){

        $p = new Produit(); //Instantiation  //Appel d'un constructeur

        $p->setReference_Produit($_GET['ref']); 
        $p->setReference_Categorie($_POST['refC']); 
        $p->setLibelle($_POST['libelle']);
        $p->setQuantite_Stock($_POST['quantite']);
        $p->setPrix_Unitaire($_POST['prixU']);
        $p->setPrix_Achat($_POST['prixA']); 
        $p->setPrixVente($_POST['prixV']);
        
        $p->update(); 
  

        header('Location: /project/listeProduit.php');   

    }

?>