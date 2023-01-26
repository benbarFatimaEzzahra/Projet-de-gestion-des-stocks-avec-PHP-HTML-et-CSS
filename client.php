<?php

require_once('dbAccess.php');

class Client{
    private $id_Client;
    private $Nom_Client;
    private $Prenom_Client;
    private $Adresse_Client;
    private $Tel_Client;
    private $Mail_Client;
    private $dba;

    public function __construct(){

    }

    public function getId_Client(){
        return $this->id_Client;
    }

    public function setId_Client($idCli){
        $this->id_Client = $idCli;
    }

    public function getNom_Client(){
        return $this->Nom_Client;
    }

    public function setNom_Client($nomCli){
        $this->Nom_Client= $nomCli;
    }
    public function getPrenom_Client(){
        return $this->Prenom_Client;
    }

    public function setPrenom_Client($prenomCli){
        $this->Prenom_Client= $prenomCli;
    }
    public function getAdresse_Client(){
        return $this->Adresse_Client;
    }

    public function setAdresse_Client($adresseCli){
        $this->Adresse_Client= $adresseCli;
    }
    public function getTel_Client(){
        return $this->Tel_Client;
    }

    public function setTel_Client($telCli){
        $this->Tel_Client= $telCli;
    }
    public function getMail_Client(){
        return $this->Mail_Client;
    }

    public function setMail_Client($mailCli){
        $this->Mail_Client= $mailCli;
    }

    public function save(){
        echo $this->id_Client;
        echo $this->Nom_Client;
        echo $this->Prenom_Client;
        echo $this->Mail_Client;
        echo $this->Tel_Client;
        echo $this->Adresse_Client;
        
        
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into client values('" . $this->id_Client . "',
                                                '"  . $this->Nom_Client . "',
                                                '" . $this->Prenom_Client . "',
                                                '" . $this->Mail_Client . "',
                                                '" . $this->Tel_Client . "',
                                                '" . $this->Adresse_Client . "')");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from client where id_Client='" . $this->id_Client . "'" );
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from client");
        return $dba->resultSet();
    }
    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update client set id_Client = '" . $this->id_Client  . "',
                                                    nom_Client='".$this->Nom_Client."',
                                                    Prenom_Client = '" . $this->Prenom_Client . "',
                                                     Mail_Client = '"  . $this->Mail_Client . "',
                                                    Tel_Client = '"  . $this->Tel_Client . "',
                                                   Adresse_Client =' "  . $this->Adresse_Client. "'
                                                    where id_Client = '"  . $this->id_Client . "'");
        $dba->execute();
        return 0;
    }
    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from client where id_Client='" . $this->id_Client  . "'");
        return $dba->single();
    }

};



?>