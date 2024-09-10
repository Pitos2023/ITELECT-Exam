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
            <option value="/home">Vegetables</option>
            <option value="/fruits">Fruits</option>
            <option value="/snacks">Snacks</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1">
            <img src="{{ URL('groceryimg/tomato.jfif') }}" data-item-name="Tomato" data-price="₱10.00">Tomato ₱10.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item2">
            <img src="{{ URL('groceryimg/onion.jfif') }}" data-item-name="Onion" data-price="₱10.00">Onion ₱10.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item3">
            <img src="{{ URL('groceryimg/eggplant.jfif') }}" data-item-name="Eggplant" data-price="₱30.00">Eggplant ₱30.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item4">
            <img src="{{ URL('groceryimg/bell pepper.jfif') }}" data-item-name="Bell Pepper" data-price="₱5.00">Bell Pepper ₱5.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item5">
            <img src="{{ URL('groceryimg/cabbage.jfif') }}" data-item-name="Cabbage" data-price="₱30.00">Cabbage ₱30.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item6">
            <img src="{{ URL('groceryimg/cucumber.jfif') }}" data-item-name="Cucumber" data-price="₱20.00">Cucumber ₱20.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item7">
            <img src="{{ URL('groceryimg/potato.jfif') }}" data-item-name="Potato" data-price="₱15.00">Potato ₱15.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item8">
            <img src="{{ URL('groceryimg/broccoli.jfif') }}" data-item-name="Broccoli" data-price="₱40.00">Broccoli ₱40.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item9">
            <img src="{{ URL('groceryimg/carrot.jfif') }}" data-item-name="Carrot" data-price="₱20.00">Carrot ₱20.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item10">
            <img src="{{ URL('groceryimg/petchay.jfif') }}"data-item-name="Petchay" data-price="₱25.00">Petchay ₱25.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>
</body>
</html>