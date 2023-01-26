<?php
require_once('dbAccess.php');
require_once('Contenir.php');
class Commande{
    
    private  $num;
    private  $id_Client;
    private  $date;
    private  $dba; //Connection à la base de données

    
    public function __construct(){ 

    }
   
    public function getNum(){
        return $this->num;
    }

    public function setNum($numC){
        $this->num = $numC;
    }

    public function getId_Client(){
        return $this->id_Client;
    }

    public function setId_Client($idCli){
        $this->id_Client = $idCli;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($dateC){
        $this->date = $dateC;
    }


    public function save(){
        $dba = new Dbaccess(); 
        $dba->query("insert into commande values(" . $this->num . ",
                                                '" . $this->id_Client . "',
                                                '"  . $this->date. "')");

                $dba->execute();
        return 0;
    }

    public function delete(){
        $dba = new Dbaccess();
        $dba->query("delete from commande where Num_Commande ='" . $this->num . "'" );
        $dba->execute();
        return 0;
    }

    public function update(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("update commande set num_Commande = " . $this->num . ",
                                                    id_Client = '" . $this->id_Client . "',
                                                    Date_Commande = '"  . $this->date. "'
                                                    where num_Commande = "  . $this->num . "");
        $dba->execute();
        return 0;
    }

    public function getAll(){
        $dba = new Dbaccess(); 
        $dba->query("Select * from commande");
        return $dba->resultSet();
    }

    public function getOne(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from commande where num_Commande=" . $this->num . "");
        return $dba->single();
    }
    public function join(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from commande c1 join client cli where c1.id_Client = cli.id_Client"); 
        return $dba->resultSet();  
    }
    public function jointure(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select * from commande c1 join contenir c2 where c1.num_Commande = c2.num_Commande"); 
        return $dba->resultSet();  
    }


    public function count(){
        $dba = new Dbaccess(); //instanciation
        $dba->query("Select count(*) as nombre from commande");
        return $dba->rowCount();
    }
};

?>