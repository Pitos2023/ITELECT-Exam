<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <link rel="stylesheet" href="grocery/homepage.css">
</head>
<body>
    <div class ="navbar">
            <a href="/home">Shop</a>
    </div>

    <div class="category">
        <label for="category-dropdown">Category:</label>
        <select id="category-dropdown" name="links" onchange="window.location.href=this.value">
            <option value="/fruits">Fruits</option>
            <option value="/home">Vegetables</option>
            <option value="/snacks">Snacks</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1">
            <img src="{{ URL('groceryimg/avocado.jfif') }}" data-item-name="Avocado" data-price="₱25.00">Avocado ₱25.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item2">
            <img src="{{ URL('groceryimg/dragonfruit.jfif') }}" data-item-name="Dragonfruit" data-price="₱50.00">Dragonfruit ₱50.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item3">
            <img src="{{ URL('groceryimg/mango.jfif') }}" data-item-name="Mango" data-price="₱20.00">Mango ₱20.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item4">
            <img src="{{ URL('groceryimg/orange.jfif') }}" data-item-name="Orange" data-price="₱15.00">Orange ₱15.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item5">
            <img src="{{ URL('groceryimg/strawberry.jfif') }}" data-item-name="Strawberry" data-price="₱15.00">Strawberry ₱15.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item6">
            <img src="{{ URL('groceryimg/pineapple.jfif') }}" data-item-name="Pineapple" data-price="₱70.00">Pineapple ₱70.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item7">
            <img src="{{ URL('groceryimg/watermelon.jfif') }}" data-item-name="Watermelon" data-price="₱60.00">Watermelon ₱60.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item8">
            <img src="{{ URL('groceryimg/pear.jfif') }}" data-item-name="Pear" data-price="₱30.00">Pear ₱30.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item9">
            <img src="{{ URL('groceryimg/grapes.jfif') }}" data-item-name="Grapes" data-price="₱5.00">Grapes ₱5.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item10">
            <img src="{{ URL('groceryimg/kiwi.jfif') }}" data-item-name="Kiwi" data-price="₱40.00">Kiwi ₱40.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>
</body>
</html>