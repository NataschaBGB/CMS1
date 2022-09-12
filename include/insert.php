<?php

    include_once("./connect.php");
    
    session_start();

    $imgSrc = $_POST['imgSrc'];
    $imgAlt = $_POST['imgAlt'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $published = $_POST['published'];
    $authorId = $_SESSION['userId'];

    $sql = "INSERT INTO `gamingarticle` (`articleId`, `imgSrc`, `imgAlt`, `description`, `price`, `category`, `published`, `authorId`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    
    $stmt = $dbh->prepare($sql);

    $stmt->execute([NULL, $imgSrc, $imgAlt, $description,
    $price, $category, $published, $authorId]);

    // $dbh = NULL;
    

    header("location: ../index.php");
?>