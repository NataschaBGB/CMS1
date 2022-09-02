<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    include_once "connect.php";

    $sql = "SELECT * FROM users WHERE userName = ? AND password = ?";

    $stmt = $dbh->prepare($sql);

    $stmt->execute([$userName, $password]);

    if(empty($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        echo "User doesn't exist";
    }
    else {
        echo "User exists!";
    }
    print_r($row);
?>