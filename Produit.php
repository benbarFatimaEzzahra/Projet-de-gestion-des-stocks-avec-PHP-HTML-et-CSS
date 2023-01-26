<?php
require_once('dbAccess.php');

class Produit{
    
    private  $reference_Produit;
    private  $reference_Categorie;
    private  $libelle;
    private  $quantite_Stock;
    private  $prix_Unitaire;
    private  $prix_Achat;
    
    private  $prix_Vente;
    private  $dba; //Connection à la base de données

    
    public function __construct(){ 

    }
   
    public function getReference_Produit(){
        return $this->reference_Produit;
    }

    public function setReference_Produit($ref){
        $this->reference_Produit = $ref;
    }
    public function getReference_Categorie(){
        return $this->reference_Categorie;
    }

    public function setReference_Categorie($ref){
        $this->reference_Categorie = $ref;
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function getQuantiteStock(){
        return $this->quantite_Stock;
    }

    public function setQuantite_Stock($quantite){
        $this->quantite_Stock = $quantite;
    }
    
    public function getPrix_Achat(){
        return $this->prix_Achat ;
    }

    public function setPrix_Achat($prixA){
        $this->prix_Achat = $prixA;
    }

    public function getPrix_Unitaire(){
        return $this->prix_Unitaire ;
    }

    public function setPrix_Unitaire($prixU){
        $this->prix_Unitaire = $prixU;
    }

    public function getPrix_Vente(){
        return $this->prix_Vente ;
    }

    public function setPrixVente($prixV){
        $this->prix_Vente = $prixV;
    }

    public function save(){
       
        echo $this->reference_Produit;
        echo $this->reference_Categorie;
        echo $this->quantite_Stock;
        echo $this->libelle ;
        echo $this->prix_Unitaire;
        echo $this->prix_Achat;
        echo $this->prix_Vente;
         $dba = new Dbaccess();
        $dba->query("insert into produit values('" . $this->reference_Produit . "',
                                                '" . $this->reference_Categorie. "',
                                                '" . $this->libelle . "',
                                                '"  . $this->quantite_Stock. "',
                                                '"  . $this->prix_Unitaire . "',
                                                '"  . $this->prix_Achat . "',
                                                '"  . $this->prix_Vente . "')");
        $dba->execute();
        return 0;
    }

    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from produit where reference_Produit ='" . $this->reference_Produit . "'" );
        $dba->execute();
        return 0;
    }

    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update produit set reference_Produit = '" . $this->reference_Produit . "',
                                                    reference_Categorie='".$this->reference_Categorie."',
                                                    libelle = '" . $this->libelle . "',
                                                    quantite_Stock = "  . $this->quantite_Stock. ",
                                                    prix_Unitaire = "  . $this->prix_Unitaire . ",
                                                    prix_Achat = "  . $this->prix_Achat . ",
                                                    prix_Vente = "  . $this->prix_Vente . "
                                                    where reference_Produit = '"  . $this->reference_Produit . "'");
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); 
        $dba->query("Select * from produit");
        return $dba->resultSet();
    }

    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from produit where reference_Produit='" . $this->reference_Produit . "'");
        return $dba->single();
    }


    public function count(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select count(*) as nombre from produit");
        return $dba->rowCount();
    }
};

?>