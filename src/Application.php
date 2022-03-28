<?php

// Routeur a developper ici ...
class Application {
    public static function run(){

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }

    if ($path==''){
        include __DIR__.'/../src/Controller/HomeController.php';
        $controller = new HomeController();
        $controller->accueil(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/articles'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->articles(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/toutes_articles'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->toutes_articles(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/article'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->article(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/series'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->series(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/films'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->films(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/jv'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->jv(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/musiques'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->musiques(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/livres'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->livres(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/bd'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->bd(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/supp_article'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->supp_article(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/post'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->post(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/ajout'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $articles = new ArticlesController();
        $articles->ajout(); //Renvoyer la vue du formulaire de connexion
    }

        
    }
}