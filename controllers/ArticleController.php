<?php
include("services/ArticleService.php");
class ArticleController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        echo "Tương tác với View from Article";
    }

    public function add(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/add_article.php");
    }

    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/list_article.php");
    }

    public function detail(){
        if(isset($_GET['id']))
            $id=$_GET['id'];
        $articelService = new ArticleService();
        $articleDetail = $articelService->getDetailArticle($id);
         $articleDetail['tieude'];
        $loader = new \Twig\Loader\FilesystemLoader('views/home');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('detail_article.twig', array('articleDetail' => $articleDetail));
    }
}
?>