<?php
    // header og aside er på en anden .php og bliver inkluderet her
    include "header-aside.php";
?>

<main>
        <!-- Kolonner i min db --
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
    $sql = "SELECT gamingarticle.*, users.dbUserName FROM gamingarticle JOIN users ON gamingarticle.authorId = users.userId";

    // prepare alt data
    $stmt = $dbh->prepare($sql);

    // execute det prepared data
    $stmt->execute();

            
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
                    <p class="author">Author: <?php echo $row['dbUserName']; ?></p>
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

<?php
    // footer er på en anden .php og bliver inkluderet her
    include "footer.php";
?>