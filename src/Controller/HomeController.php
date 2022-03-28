<?php
class HomeController {
    public function accueil(){
        include __DIR__.'/../Entity/Article.php';
        $a = new Article();
        $res = $a->findAll();
        include __DIR__.'/../../templates/accueil.php';
    }
}