<?php
    require_once('Appro.php');   //require    //include
    
    if(isset($_POST['save-appro'])){
        $a = new Appro(); //Instantiation  //Appel d'un constructeur

        $a->setNum($_POST['num']); 
        $a->setId_Fournisseur($_POST['id']); 
        $a->setDate($_POST['date']); 

        $a->save(); //Appel de la methode save
        header('Location: ajoutS.php');    
    }

?>