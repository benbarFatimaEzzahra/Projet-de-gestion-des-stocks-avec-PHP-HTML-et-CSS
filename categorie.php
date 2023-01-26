<?php

require_once('dbAccess.php');

class Categorie{
    private $reference_Categorie;
    private $description_Categorie;
    private $dba;

    public function __construct(){

    }

    public function getReference(){
        return $this->reference_Categorie;
    }

    public function setReference($refC){
        $this->reference_Categorie = $refC;
    }

    public function getDescription(){
        return $this->description_Categorie;
    }

    public function setDescription($descriptionC){
        $this->description_Categorie = $descriptionC;
    }

    public function save(){
        echo $this->reference_Categorie;
        echo $this->description_Categorie;
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into categorie values('" . $this->reference_Categorie . "',
                                                '"  . $this->description_Categorie . "')");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from categorie where reference_Categorie='" . $this->reference_Categorie . "'" );
        $dba->execute();
        return 0;
    }

    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update categorie set reference_Categorie = '" . $this->reference_Categorie. "',
                                                    description_Categorie='".$this->description_Categorie."'
                                                    where reference_Categorie = '"  .$this->reference_Categorie . "'");
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); 
        $dba->query("Select * from categorie");
        return $dba->resultSet();
    }

    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from categorie where reference_Categorie='" . $this->reference_Categorie . "'");
        return $dba->single();
    }


    public function count(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select count(*) as nombre from categorie");
        return $dba->rowCount();
    }
};





?>