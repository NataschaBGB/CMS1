<?php

    include_once("./connect.php");
    

    $imgSrc = $_POST['imgSrc'];
    $imgAlt = $_POST['imgAlt'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $published = $_POST['published'];
    $author = $_POST['author'];

    $sql = "INSERT INTO `gamingarticle` (`articleId`,
    `imgSrc`, `imgAlt`, `description`, `price`,
    `category`, `published`, `author`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    
    $stmt = $dbh->prepare($sql);

    $stmt->execute([NULL, $imgSrc, $imgAlt, $description,
    $price, $category, $published, $author]);

    

    header("location: ../index.php");
?>