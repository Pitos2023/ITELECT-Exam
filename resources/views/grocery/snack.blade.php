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
            <option value="/snacks">Snacks</option></option>
            <option value="/home">Vegetables</option>
            <option value="/fruits">Fruits</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1">
            <img src="{{ URL('groceryimg/chippy.jfif') }}" data-item-name="Chippy" data-price="₱14.00">Chippy ₱14.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item2">
            <img src="{{ URL('groceryimg/nova.jfif') }}" data-item-name="Nova" data-price="₱14.00">Nova ₱14.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item3">
            <img src="{{ URL('groceryimg/pringles.jfif') }}" data-item-name="Pringles" data-price="₱35.00">Pringles ₱35.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item4">
            <img src="{{ URL('groceryimg/doritos.jfif') }}" data-item-name="Doritos" data-price="₱140.00">Doritos ₱140.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item5">
            <img src="{{ URL('groceryimg/pic-a.jfif') }}" data-item-name="Pic-A" data-price="₱40.00">Pic-A ₱40.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item6">
            <img src="{{ URL('groceryimg/mr.chips.jfif') }}" data-item-name="Mr.Chips" data-price="₱14.00">Mr.Chips ₱14.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item7">
            <img src="{{ URL('groceryimg/tortillos.jfif') }}" data-item-name="Tortillos" data-price="₱35.00">Tortillos ₱35.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item8">
            <img src="{{ URL('groceryimg/lays.jfif') }}" data-item-name="Lays" data-price="₱90.00">Lays ₱90.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item9">
            <img src="{{ URL('groceryimg/fritos.jfif') }}" data-item-name="Fritos" data-price="₱25.00">Fritos ₱25.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
        <div class ="item item10">
            <img src="{{ URL('groceryimg/piatos.jfif') }}" data-item-name="Piattos" data-price="₱16.00">Piattos ₱16.00 <br>
            <input type="number" min="1" max="10" value="1" style="width:50px;">
            <button onclick="addToCart(this)" class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>
</body>
</html>