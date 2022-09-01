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
                <a href="#"><li>Min konto</li></a>
                <a href="#"><li>Min kurv</li></a>
            </ul>
        </div>
    </header>

    <aside>
        <nav>
            <h1>Gaming Webshop</h1>
            <ul>
                <a href="#"><li>Forside</li></a>
                <a href="#"><li>Produkter</li></a>
                <a href="#"><li>Priser</li></a>
                <a href="#"><li>Kontakt</li></a>
                <a href="#"><li>Om Os</li></a>
                <a href="#"><li>Log ind</li></a>
            </ul>
        </nav>

        <!-- form til at indsætte nye artikler uden at skulle igennem databasen -->
        <!-- TILFØJ plus img (og checkbox) til at få form frem -->
        <div class="newArticle">
            <h3>New Article<br></h3>
            <form action="include/insert.php" method="post" class="new">
                <div class="lbl">
                <label for="imgSrc">Photo file name</label>
                    <div class="input">
                        <input type="text" name="imgSrc" placeholder="image source without .jpg">
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
                    <input type="submit">
                </div>
            </form>
        </div>
    </aside>


    <main>
        <!--
        img src
        img alt
        description
        price
        category
        published
        author -->

        <?php
                require_once './include/connect.php';

                // vælg alt* fra tabellen gamingarticle i databasen gamingwebsite
                $sql = "SELECT * FROM gamingarticle";

                // prepare alt data
                $stmt = $dbh->prepare($sql);

                // execute det prepared data
                $stmt->execute(); ?>

            <?php
                // mens der stadig er rækker i databasen, skal den kører igennem og indsætte data fra dem i en ny række
                // hiv 1 række ud og gem det i variablen $row
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
            ?>

            <!-- en article sat ind i loopet, så den generer en ny article for hver række i databasen -->
            <article class="product">
                <a href="#"><img src="./img/<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>"></a>
                <div class="product-text">
                    <h2 class="description"><?php echo $row['description']; ?></h2>
                    <p class="price">$<?php echo $row['price']; ?></p>
                    <p class="category">Category: <?php echo $row['category']; ?></p>
                    <p class="date">Published: <?php echo $row['published']; ?></p>
                    <p class="author">Author: <?php echo $row['author']; ?></p>
                </div>
                <button class="buy">Køb</button>
            </article>

            <?php
                }
            ?>



            <!-- ALT DET KODE MAN SPARER VED AT BRUGE PHP DATABASE -->

        <!-- <article class="product">
            <a href="#"><img src="img/catpaws.jpg" alt="Cat paws keyboard cap"></a>
            <div class="product-text">
                <h2 class="description">Keyboard button cap: Cat paws!</h2>
                <p class="price">$30</p>
                <p class="category">Decoration</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article>

        <article class="product">
            <a href="#"><img src="img/pigs.jpg" alt="USB pig with piglets"></a>
            <div class="product-text">
                <h2 class="description">Mom pig with piglets: USB plugs</h2>
                <p class="price">$50</p>
                <p class="category">Office</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article>

        <article class="product">
            <a href="#"><img src="img/mousepadpaw.jpg" alt="Cat paw Mousepad"></a>
            <div class="product-text">
                <h2 class="description">Big mousepad cat paw</h2>
                <p class="price">$20</p>
                <p class="category">Gaming/Office</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article>

        <article class="product">
            <a href="#"><img src="img/gaming set.jpg" alt="Gaming set"></a>
            <div class="product-text">
                <h2 class="description">Gaming set</h2>
                <p class="price">$250</p>
                <p class="category">Gaming</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article>

        <article class="product">
            <a href="#"><img src="img/keyboard.jpg" alt="Gaming keyboard"></a>
            <div class="product-text">
                <h2 class="description">Gaming keyboard with LED light</h2>
                <p class="price">$200</p>
                <p class="category">Gaming</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article>

        <article class="product">
            <a href="#"><img src="img/Razer Kitty Kraken.jpg" alt="Razer headset with cat ears"></a>
            <div class="product-text">
                <h2 class="description">Razer Kitty Kraken headset with LED light</h2>
                <p class="price">$350</p>
                <p class="category">Gaming</p>
                <p class="date">25/08-2022</p>
                <p class="author">Publiceret af Natascha</p>
            </div>
            <button class="buy">Køb</button>
        </article> -->
    </main>

    <footer>
        <div class="info">
            <h4>Adress</h4>
            <p>En vej 7<br>
                2605 Brøndby</p>
            <h4>Phone</h4>
            <p>54345768</p>
            <h4>E-mail</h4>
            <p>enmail@mail.com</p>
        </div>

        <div class="SoMe">
            <h4>Social Media</h4>
            <a href="https://www.facebook.com" target="_blank"><img src="img/Facebook-Logo.png" alt="Facebook.com"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="img/Instagram logo.png" alt="Instagram"></a>
            <a href="https://www.twitter.com" target="_blank"><img src="img/Twitter-Logo.png" alt="Twitter"></a>
        </div>

        <div class="more">
            <a href="#"><h4>About</h4></a>
            <a href="#"><h4>Contact us</h4></a>
            <a href="#"><h4>Private Policy</h4></a>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>