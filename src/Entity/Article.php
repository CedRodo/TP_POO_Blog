<?php
require_once "Modele.php";
class Article extends Modele {

    protected $table="articles";
    private $titre;
    private $contenu;
    private $categories_id;
    private $utilisateurs_id;
    private $cover;
    
    public function ajout() {
    
        $sql = "INSERT INTO $this->table(titre, contenu, cover, categories_id, utilisateurs_id) VALUES ('$this->titre','$this->contenu','$this->cover', $this->categories_id, $this->utilisateurs_id)";
        $resultat = $this->conn->query($sql);

        }


    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    

    /**
     * Get the value of categories_id
     */ 
    public function getCategories_id()
    {
        return $this->categories_id;
    }

    /**
     * Set the value of categories_id
     *
     * @return  self
     */ 
    public function setCategories_id($categories_id)
    {
        $this->categories_id = $categories_id;

        return $this;
    }

    /**
     * Get the value of utilisateurs_id
     */ 
    public function getUtilisateurs_id()
    {
        return $this->utilisateurs_id;
    }

    /**
     * Set the value of utilisateurs_id
     *
     * @return  self
     */ 
    public function setUtilisateurs_id($utilisateurs_id)
    {
        $this->utilisateurs_id = $utilisateurs_id;

        return $this;
    }

    /**
     * Get the value of cover
     */ 
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set the value of cover
     *
     * @return  self
     */ 
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }
}

