<?php
class ArticlesController {
    public function articles(){
        include __DIR__.'/../../templates/articles.php';
    }

    public function toutes_articles() {
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $a->findAll();
    }
    
    public function article() {
        include __DIR__.'/../Entity/Article.php';
        $id = $_GET['id'];
        $a = new Article();
        $res = $a->findOne($id);
        include __DIR__.'/../../templates/article.php';
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
    
    public function ajout() {
        if (empty($_POST) || !isset($_POST)) {
            $erreur = "Il n'y a rien à ajouter";
        } else {
            include __DIR__.'/../Entity/Article.php';
            include __DIR__.'/../Entity/Categorie.php';
            include __DIR__.'/../Entity/Utilisateur.php';
            $a = new Article();
            if(isset($_FILES['photo'])){
                if($_FILES['photo']['name'] != "") {
                $tmpName = $_FILES['photo']['tmp_name'];
                $photo = $_FILES['photo']['name'];
                $size = $_FILES['photo']['size'];
                $error = $_FILES['photo']['error'];
                move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/assets/img/".$photo);
                }
                $a->setCover(htmlspecialchars($photo));
            }
            $a->setTitre(htmlspecialchars($_POST['titre']));
            $a->setContenu(htmlspecialchars($_POST['contenu']));
            $a->setCategories_id($_POST['categorie']);
            $a->setUtilisateurs_id($_POST['pseudo']);
            $a->ajout();
        }
        include __DIR__.'/../../templates/ajout.php';
    }


}