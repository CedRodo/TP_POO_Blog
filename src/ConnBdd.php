<?php

class ConnBdd {
    public static function getPdo(){
        return new PDO ('mysql:host=127.0.0.1;dbname=blog_articles;charset=utf8', 'root', '');
    }
}