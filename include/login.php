<?php
    $username = $_POST['userName'];
    $userPass = $_POST['userPass'];
    
    include_once("./connect.php");

    $sql = "SELECT * FROM users WHERE dbUserName = ? AND userPass = ?";

    $stmt = $dbh->prepare($sql);

    $stmt->execute([$username, $userPass]);

    if(empty($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        echo "User doesn't exist";
    }
    else {
        echo "User exists!";
    }
