<?php
require_once "Modele.php";
class Categorie extends Modele {

    protected $table="categories";
    private $nom;

    public function ajout() {
    
        $sql = "INSERT INTO $this->table('nom') VALUES ('$this->nom')";
        $resultat = $this->conn->query($sql);

        }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}