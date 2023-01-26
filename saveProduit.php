<?php
    require_once('Produit.php');   //require    //include
    
    if(isset($_POST['save-product'])){
        $prd = new Produit(); //Instantiation  //Appel d'un constructeur
        
       
        $prd->setReference_Produit($_POST['reference_Produit']); //Appel du setter du nom
        $prd->setReference_Categorie($_POST['reference_Categorie']);
        $prd->setLibelle($_POST['libelle']); //Appel du setter du titre
        $prd->setQuantite_Stock($_POST['quantite_Stock']); //Appel du setter du message
        $prd->setPrix_Achat($_POST['prix_Achat']); //Appel du setter du email
        $prd->setPrix_Unitaire($_POST['prix_Unitaire']); //Appel du setter du email
        $prd->setPrix_Vente($_POST['prix_Vente']); //Appel du setter du email


      
        $prd->save(); //Appel de la methode save
        header('Location: listeProduit.php');    
    }

?>