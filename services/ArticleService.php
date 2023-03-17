<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();
        $sql = "SELECT * FROM baiviet ";
        $stmt = $conn->query($sql);

        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['ma_bviet'],$row['tieude'], $row['tomtat'], $row['ten_bhat']);
            array_push($articles,$article);
        }

        return $articles;
    }
    public function getDetailArticle($id){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT tieude,ten_bhat,tomtat,noidung,theloai.ten_tloai,tacgia.ten_tgia FROM baiviet,theloai,tacgia WHERE baiviet.ma_tloai=theloai.ma_tloai AND baiviet.ma_tgia=tacgia.ma_tgia AND ma_bviet =:id";

        $stmt = $conn -> prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array('id' => $id));
        $row = $stmt->fetch();;
        return $row;
    }
}