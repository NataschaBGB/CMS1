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
            <h1>Gaming Webshop</h1>
            <ul>
                <a href="#"><li>Front Page</li></a>
                <a href="#"><li>Products</li></a>
                <a href="#"><li>Prices</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>About Us</li></a>
            </ul>
            <form action="include/login.php" method="post" class="login">
            <hr>
            <h2>Log in</h2>
                <div>
                    <label for="userName">User Name</label>
                    <input type="text" name="userName" id="userName" placeholder="Natascha"/>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="********"/>
                </div>                    <div>
                    <input type="submit" value="Log in"/>
                </div>
                <a href="include/createUser.php">Create New User</a>
                <hr>
            </form>
        </nav>

        <!-- form til at indsætte nye artikler uden at skulle igennem databasen -->
        <!-- TILFØJ plus img (og checkbox) til at få form frem -->
        <div class="newArticle">
            <hr>        
            <h3>+ New Article<br></h3>
            <hr>
            <form action="include/insert.php" method="post" class="new">
                <div class="lbl">
                <label for="imgSrc">Photo file name</label>
                    <div class="input">
                        <input type="text" name="imgSrc" placeholder="image source with .jpg">
                    </div>
                </div>

                <div class="lbl">
                    <label for="imgAlt">Pic Alt text</label>
                    <div class="input">
                        <input type="text" id="imgAlt" name="imgAlt" placeholder="Alternative image text">
                    </div>
                </div>

                <div class="lbl">
                    <label for="description">Headline</label>
                    <div class="input">
                        <input type="text" id="description" name="description" placeholder="Article Title">
                    </div>
                </div>
    
                <div class="lbl">
                    <label for="price">Product Price</label>
                    <div class="input">
                        <input type="text" id="price" name="price" placeholder="Dollars">
                    </div>
                </div>
    
                <div class="lbl">
                    <label for="category">Select Category</label>
                    <div class="input">
                        <select id="category" name="category">
                            <option value="decor">Decoration</option>
                            <option value="gaming">Gaming</option>
                            <option value="office">Office</option>
                        </select>
                    </div>
                </div>
    
                <div class="lbl">
                    <label for="published">Published on</label>
                    <div class="input">
                        <input type="text" id="published" name="published" placeholder="yyyy-mm-dd">
                    </div>
                </div>
    
                <div class="lbl">
                    <label for="author">Article author</label>
                    <div class="input">
                        <input type="text" id="author" name="author" placeholder="Natascha Bjerning">
                    </div>
                </div>

                <div>
                    <input class="btn" type="submit">
                </div>
            </form>
        </div>
    </aside>