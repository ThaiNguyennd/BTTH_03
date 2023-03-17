<?php
include("configs/DBConnection.php");


   function Process_login($username,$password){
    $dbConn = new DBConnection();
    $conn = $dbConn->getConnection();

    
    $sql = 'SELECT * FROM nguoidung WHERE username = :username AND password = :password';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
   

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;

 
}