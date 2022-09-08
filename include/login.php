<?php
    $username = $_POST['userName'];
    $userPass = $_POST['userPass'];
    
    include_once("./connect.php");

    $sql = "SELECT * FROM users WHERE dbUserName = ? AND userPass = ?";

    $stmt = $dbh->prepare($sql);

    $stmt->execute([$username, $userPass]);
    $dbh = NULL;

    // hvis $row (den variabel vi henter data fra db ned til) er tom (altså den ikke eksisterer i databasen)
    if(empty($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        // så send brugeren tilbage til forsiden, men med en fejl (?err = noUser)
        header("location: ../index.php?err=noUser");
    }
    // hvis brugeren eksisterer i databasen
    else {
        // start session
        session_start();
        // gem brugernavn fra databasen (dbUserName) i variabel $_SESSION
        $_SESSION['username'] = $row['dbUserName'];
        $_SESSION['accesLevel'] = $row['accesLevel'];
        // og retuner til forsiden
        header("location: ../index.php");
    }
?>