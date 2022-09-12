<?php
    include_once "header-aside.php";
?>

<main>
<form action="include/insert.php" method="post" class="new">
    <div class="lbl">
        <label for="imgSrc">Photo file name</label>
        <div class="input">
            <input type="text" name="imgSrc" placeholder="image source with .jpg" required>
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

    <div>
        <input class="btn" type="submit">
    </div>
</form>
</main>

<?php
    include_once "footer.php";
?>