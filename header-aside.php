<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gaming Webshop</title>
</head>
<body>
    <!-- <?php
        // åben forbindelse til databasen
        //require_once 'connect.php';

        // luk forbindelse
        // $dbh = null;

        // fortæl db hvilke data vi skal bruge
        //$sql = "SELECT * FROM gamingarticle";

        // prepare statement (prepare er ikke nødvendig, men et lag af sikkerhed, så vores db ikke kan hackes)
        //$stmt = $dbh->prepare($sql);

        // udfør handling (stmt indeholder vores data og bliver nu bedt om at udføre det)
        //$stmt->execute();

        // udskriv det hentede data
        //$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($data);

    ?> -->

    <div class="container">
        <header>
            <h1>
                Play games everyday.
                Always be a winner!
            </h1>

            <div>
                <ul>
                    <a href="#"><li>My Account</li></a>
                    <a href="#"><li>My Basket</li></a>
                </ul>
            </div>
        </header>

        <aside>
            <nav>
                <a href="index.php"><h1>Gaming Webshop</h1></a>
                
                <?php
                    // hvis session er aktiv / hvis brugerens username og password  eksisterer i databasen
                    if(isset($_SESSION)) {
                    // skriv Welcome [username] (det brugernavn der er logget ind med)
                        echo "<h4>Welcome " . $_SESSION['username'] . "</h4>";
                    }
                ?>

                <ul>
                    <a href="index.php"><li>Front Page</li></a>
                    <a href="products.php"><li>Products</li></a>
                    <a href="#"><li>Prices</li></a>
                    <a href="#"><li>Contact</li></a>
                    <a href="#"><li>About Us</li></a>
                </ul>

                <?php
                    if(!isset($_SESSION['username'])) { ?>
                        <form action="./include/login.php" method="post" class="login">
                        <hr>
                        <h2>Log in</h2>
                
                        <?php
                            // hvis ?err (i login.php) er aktiv OG ?err er lig med "noUser"
                            if(isset($_GET['err']) && $_GET['err'] == "noUser") {
                                // så echo denne fejlbesked
                                echo "<span style='color:black;font-weight:700'>Login error <br> No user found</span>";
                            }
                        ?>
    
                        <div>
                            <label for="userName">User Name</label>
                            <input type="text" name="userName" id="userName"/>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="userPass" id="userPass"/>
                        </div>
                        <div>
                            <input type="submit" value="Log in"/>
                        </div>
         
                        <a href="createUser.php">Create New User</a>
                        <hr>
                    </form>
                    <?php }
                    else {
                        echo "<a href='./include/logout.php' class='logout'>Log out</a>";
                    } ?>
            
            </nav>

            <!-- form til at indsætte nye artikler uden at skulle igennem databasen -->
            <!-- TILFØJ plus img (og checkbox) til at få form frem -->
            <div class="newArticle">
                <form action="createArticle.php">
                    <input type="submit" value="+ New Article">
                </form>
            </div>

        </aside>
    <!-- </div> -->