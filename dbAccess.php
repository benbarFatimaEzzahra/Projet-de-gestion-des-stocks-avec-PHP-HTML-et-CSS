<?php

    class Dbaccess {
        private $dbHost = 'localhost';
        private $dbUser = 'root';
        private $dbPass = '';
        private $dbName = 'gestion_stock';

        private $statement;
        private $dbHandler;
        private $error;

        public function __construct() { //Constructeur
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            
            try {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass); //Mysqli = sql injection
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //Allows us to write queries
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        //Execute the prepared statement
        public function execute() {
            return $this->statement->execute();
        }

        //Return an array
        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //Return a specific row as an object
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        //Get's the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }
    }
    
?>