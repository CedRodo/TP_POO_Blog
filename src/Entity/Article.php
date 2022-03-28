<?php
require_once "Modele.php";
class Article extends Modele {

    protected $table="articles";
    
    public function categorie($cat) {

    $sql = "SELECT * FROM $this->table WHERE categories_id=$cat";
    $resultat = $this->conn->query($sql);
    
    $tab = $resultat->fetchAll();
    return $tab;
    }
    
}

