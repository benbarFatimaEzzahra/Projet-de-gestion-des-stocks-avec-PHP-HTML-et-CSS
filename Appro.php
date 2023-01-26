<?php

require_once('dbAccess.php');
require_once('stock.php');
class Appro{
    private $num;
    private $id_Fournisseur;
    private $date;
    private $dba;

    public function __construct(){

    }

    public function getNum(){
        return $this->num;
    }

    public function setNum($num){
        $this->num = $num;
    }

    public function getId_Fournisseur(){
        return $this->id_Fournisseur;
    }

    public function setId_Fournisseur($id){
        $this->id_Fournisseur = $id;
    }
    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function save(){
        echo $this->num;
        echo $this->id_Fournisseur;
        echo $this->date;
        $dba = new Dbaccess(); //instanciation
        $dba->query("insert into approvisionnement values('" . $this->num . "',
                                                '"  . $this->id_Fournisseur . "',
                                                '" .$this->date."')");
        $dba->execute();
        return 0;
    }
    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from approvisionnement where Num_Approvisionnement='" . $this->num . "'" );
        $dba->execute();
        return 0;
    }

    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update approvisionnement set Num_Approvisionnement = '" . $this->reference_Categorie. "',
                                                  Id_Fournisseur='".$this->id_Fournisseur."',
                                                  Date_Approvisionnement='".$this->date."
                                                    where Num_Approvisionnement = '"  .$this->num . "'");
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); 
        $dba->query("Select * from approvisionnement a join stock s  where a.Num_Approvisionnement=s.Num_Approvisionnement");
        return $dba->resultSet();
    }

    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from approvisionnement  where Num_Approvisionnement='" . $this->num . "'");
        return $dba->single();
    }


    public function count(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select count(*) as nombre from approvisionnement");
        return $dba->rowCount();
    }
};

?>