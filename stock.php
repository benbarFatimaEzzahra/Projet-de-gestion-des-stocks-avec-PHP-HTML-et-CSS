<?php

require_once('dbaccess.php');

class stock{
    private $Num_Approvisionnement;
    private $Reference_Produit;
    private $Quantite_Approvisionnement;
    private $dba;

    public function __construct(){

    }

    public function getNum_Approvisionnement(){
        return $this->Num_Commande;
    }

    public function setNum_Approvisionnement($num){
        $this->Num_Approvisionnement = $num;
    }

    public function getReference_Produit(){
        return $this->Reference_Produit;
    }

    public function setReference_Produit($ref){
        $this->Reference_Produit = $ref;
    }
    public function getQuantite_Approvisionnement(){
        return $this->Quantite_Approvisionnement;
    }

    public function setQuantite_Approvisionnement($quantite){
        $this->Quantite_Approvisionnement = $quantite;
    }

    public function save(){
        echo $this->Num_Approvisionnement;
        echo $this->Reference_Produit;
        echo $this->Quantite_Approvisionnement;
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into stock values('" . $this->Num_Approvisionnement. "',
                                                '" . $this->Reference_Produit . "',
                                                "  . $this->Quantite_Approvisionnement . ")");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from stock where Num_Approvisionnement='" . $this->Num_Approvisionnement . "'
                                                and reference_Produit='". $this->Reference_Produit . "'" );
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from stock");
        return $dba->resultSet();
    }
    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from stock where Num_Approvisionnement='" . $this->Num_Approvisionnement . "'
                                                  and reference_Produit='". $this->Reference_Produit . "'");
        return $dba->single();
    }
    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update stock set Num_Approvisionnement= '" . $this->Num_Approvisionnement. "',
                                         reference_Produit='".$this->Reference_Produit.",
                                         Quantite_Approvisionnement=". $this->Quantite_Approvisionnement ."
                                         where Num_Commande='" . $this->Num_Approvisionnement . "'
                                         and reference_Produit='". $this->Reference_Produit . "'");
        $dba->execute();
        return 0;
    }
}



?>