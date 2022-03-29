<?php
abstract class Modele {
        protected $conn;  
        protected $table;     

        public  function __construct() {  
        include_once __DIR__.'/../../src/ConnBdd.php';
        $this->conn = ConnBdd::getPdo();
        
    }


    
        public function findAll() {

        $sql = "SELECT * FROM $this->table";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        return $tab;
        }
    
        public function findOne($id) {
    
        $sql = "SELECT * FROM $this->table WHERE id=$id";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        return $tab;
        }
    
        public function deleteOne($id) {
    
        $sql = "DELETE FROM $this->table WHERE id=$id";
        $resultat = $this->conn->query($sql);
        }

        public function ajout($data){
    
            $data=implode(",", $data);
            
            $sql="insert into $this->table VALUES (NULL, $data)";
       
             $this->conn->query($sql);
       
             
        }
}