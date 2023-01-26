
<?php
   
   require_once('stock.php');
   if(isset($_POST['save-stock'])){
       $s = new stock(); //Instantiation  //Appel d'un constructeur
       $s->setNum_Approvisionnement($_POST['num']);
       $s->setReference_Produit($_POST['refP']);
       $s->setQuantite_Approvisionnement($_POST['quantite']);
       $s->save(); 
       header('Location: listeAppro.php');    
   }

?>