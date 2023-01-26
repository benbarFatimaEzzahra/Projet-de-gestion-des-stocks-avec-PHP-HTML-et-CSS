<?php

require_once('dbaccess.php');

class Contenir{
    private $Num_Commande;
    private $Reference_Produit;
    private $Quantite_Commande;
    private $dba;

    public function __construct(){

    }

    public function getNum_Commande(){
        return $this->Num_Commande;
    }

    public function setNum_Commande($num){
        $this->Num_Commande = $num;
    }

    public function getReference_Produit(){
        return $this->Reference_Produit;
    }

    public function setReference_Produit($ref){
        $this->Reference_Produit = $ref;
    }
    public function getQuantite_Commande(){
        return $this->Quantite_Commande;
    }

    public function setQuantite_Commande($quantite){
        $this->Quantite_Commande = $quantite;
    }

    public function save(){
        echo $this->Num_Commande;
        echo $this->Reference_Produit;
        echo $this->Quantite_Commande;
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into contenir values(" . $this->Num_Commande . ",
                                                '" . $this->Reference_Produit . "',
                                                "  . $this->Quantite_Commande . ")");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from contenir where Num_Commande=" . $this->Num_Commande . "
                                                and reference_Produit='". $this->Reference_Produit . "'" );
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from contenir");
        return $dba->resultSet();
    }
    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from contenir where Num_Commande=" . $this->Num_Commande . "
                                                  and reference_Produit='". $this->Reference_Produit . "'");
        return $dba->single();
    }
    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update contenir set Num_Commande = " . $this->Num_Commande . ",
                                         reference_Produit='".$this->Reference_Produit.",
                                         Quantite_Commande=". $this->Quantite_Commande ."
                                         where Num_Commande=" . $this->Num_Commande . "
                                         and reference_Produit='". $this->Reference_Produit . "'");
        $dba->execute();
        return 0;
    }
}



?>