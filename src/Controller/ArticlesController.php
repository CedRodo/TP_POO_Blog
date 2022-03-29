<?php
class ArticlesController {
    public function articles(){
        include __DIR__.'/../../templates/articles.php';
    }
    
    public function article() {
        include __DIR__.'/../Entity/Article.php';
        $id = $_GET['id'];
        $a = new Article();
        $res = $a->findOne($id);
        include __DIR__.'/../../templates/article.php';
    }
    
    public function series() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(1);
        include __DIR__.'/../../templates/series.php';
    }
    
    public function films() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(2);
        include __DIR__.'/../../templates/films.php';
    }
    
    public function jv() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(3);
        include __DIR__.'/../../templates/jv.php';
    }
    
    public function musiques() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(4);
        include __DIR__.'/../../templates/musiques.php';
    }
    
    public function livres() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(5);
        include __DIR__.'/../../templates/livres.php';
    }
    
    public function bd() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->categorie(6);
        include __DIR__.'/../../templates/bd.php';
    }
    
    public function supp_article() {
        include __DIR__.'/../Entity/Article.php';
        $id = $_GET['id'];
        $a = new Article();
        $a->deleteOne($id);
        include __DIR__.'/../../templates/supp_article.php';
    }
    
    public function post() {
        include __DIR__.'/../Entity/Categorie.php';
        include __DIR__.'/../Entity/Utilisateur.php';
        $c = new Categorie();
        $cat = $c->findAll();
        $u = new Utilisateur();
        $uti = $u->findAll();
        include __DIR__.'/../../templates/post.php';
    }
    
    public function ajout(){
        if (empty($_POST) || !isset($_POST)) {
            $erreur = "Il n'y a rien à ajouter";
        } else {
            include __DIR__.'/../Entity/Modele.php';
            include __DIR__.'/../Entity/Article.php';

            $a=new Article();

            if(isset($_FILES['photo'])){
                if($_FILES['photo']['name'] != "") {
                $tmpName = $_FILES['photo']['tmp_name'];
                $photo = $_FILES['photo']['name'];
                $size = $_FILES['photo']['size'];
                $error = $_FILES['photo']['error'];
                move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/assets/img/".$photo);
                }
            }  

            // on lance la méthode inserer
            $data[]="'".htmlspecialchars($_POST['titre'])."'";
            $data[]="'".htmlspecialchars($_POST['contenu'])."'";
            $data[]="'".htmlspecialchars($photo)."'";
            $data[]=$_POST['categorie'];
            $data[]=$_POST['pseudo'];
            $a->ajout($data);

            }
            
        // appel la vue
            include __DIR__.'/../../templates/ajout.php';

        }

    }