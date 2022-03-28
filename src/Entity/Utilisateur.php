<?php
require_once "Modele.php";
class Utilisateur extends Modele {

    protected $table="utilisateurs";
    private $pseudo;

    public function ajout() {
    
        $sql = "INSERT INTO $this->table('pseudo') VALUES ('$this->pseudo')";
        $resultat = $this->conn->query($sql);

        }


    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}