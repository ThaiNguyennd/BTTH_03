<?php
include("services/ArticleService.php");


class HomeController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articelService = new ArticleService();
        $articles = $articelService->getAllArticles();
        // Nhiệm vụ 2: Tương tác với View
        $loader = new \Twig\Loader\FilesystemLoader('views/home');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('/index.twig', array('articles' => $articles));
    }
}