<?php

require_once('dbAccess.php');

class Fournisseur{
    private $id_Fournisseur;
    private $Nom_Fournisseur;
    private $Prenom_Fournisseur;
    private $Adresse_Fournisseur;
    private $Tel_Fournisseur;
    private $Mail_Fournisseur;
    private $dba;

    public function __construct(){

    }

    public function getId_Fournisseur(){
        return $this->id_Fournisseur;
    }

    public function setId_Fournisseur($idF){
        $this->id_Fournisseur = $idF;
    }

    public function getNom_Fournisseur(){
        return $this->Nom_Fournisseur;
    }

    public function setNom_Fournisseur($nomF){
        $this->Nom_Fournisseur= $nomF;
    }
    public function getPrenom_Fournisseur(){
        return $this->Prenom_Fournisseur;
    }

    public function setPrenom_Fournisseur($prenomF){
        $this->Prenom_Fournisseur= $prenomF;
    }
    public function getAdresse_Fournisseur(){
        return $this->Adresse_Fournisseur;
    }

    public function setAdresse_Fournisseur($adresseF){
        $this->Adresse_Fournisseur= $adresseF;
    }
    public function getTel_Fournisseur(){
        return $this->Tel_Fournisseur;
    }

    public function setTel_Fournisseur($telF){
        $this->Tel_Fournisseur= $telF;
    }
    public function getMail_Fournisseur(){
        return $this->Mail_Fournisseur;
    }

    public function setMail_Fournisseur($mailF){
        $this->Mail_Fournisseur= $mailF;
    }

    public function save(){
        echo $this->id_Fournisseur;
        echo $this->Nom_Fournisseur;
        echo $this->Prenom_Fournisseur;
        echo $this->Adresse_Fournisseur;
        echo $this->Tel_Fournisseur;
        echo $this->Mail_Fournisseur;
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into Fournisseur values('" . $this->id_Fournisseur . "',
                                                '"  . $this->Nom_Fournisseur . "',
                                                '" . $this->Prenom_Fournisseur . "',
                                                '" . $this->Adresse_Fournisseur . "',
                                                '" . $this->Tel_Fournisseur . "',
                                                '" . $this->Mail_Fournisseur . "')");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from Fournisseur where id_Fournisseur='" . $this->id_Fournisseur . "'" );
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from Fournisseur");
        return $dba->resultSet();
    }

    public function update(){
        $dba = new Dbaccess(); //instanciation
         $dba->query("update Fournisseur set id_Fournisseur = '" . $this->id_Fournisseur  . "',
                                                nom_Fournisseur='".$this->Nom_Fournisseur."',
                                                Prenom_Fournisseur = '" . $this->Prenom_Fournisseur . "',
                                                Adresse_Fournisseur =' "  . $this->Adresse_Fournisseur. "', 
                                                Tel_Fournisseur = '"  . $this->Tel_Fournisseur . "',
                                               Mail_Fournisseur = '"  . $this->Mail_Fournisseur . "'
                                                where id_Fournisseur = '"  . $this->id_Fournisseur . "'");
    $dba->execute();
    return 0;
}  
  public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from fournisseur where id_Fournisseur='" . $this->id_Fournisseur  . "'");
        return $dba->single();
    }
};



?>