<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <link rel="stylesheet" href="grocery/homepage.css">
</head>
<body>
    <div class ="navbar">
            <a href="/home">Shop</a>
            <a href="/cart">Cart</a>
    </div>

    <div class="category">
        <label for="category-dropdown">Category:</label>
        <select id="category-dropdown" name="links" onchange="window.location.href=this.value">
            <option value="/home">Vegetables</option>
            <option value="/fruits"><a href="/fruits">Fruits</a></option>
            <option value="/snacks">Snacks</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1"><img src="{{ URL('groceryimg/tomato.jfif') }}">Tomato</div>
        <div class ="item item2"><img src="{{ URL('groceryimg/onion.jfif') }}">Onion</div>
        <div class ="item item3"><img src="{{ URL('groceryimg/eggplant.jfif') }}">Eggplant</div>
        <div class ="item item4"><img src="{{ URL('groceryimg/bell pepper.jfif') }}">Bell Pepper</div>
        <div class ="item item5"><img src="{{ URL('groceryimg/cabbage.jfif') }}">Cabbage</div>
        <div class ="item item6"><img src="{{ URL('groceryimg/cucumber.jfif') }}">Cucumber</div>
        <div class ="item item7"><img src="{{ URL('groceryimg/potato.jfif') }}">Potato</div>
        <div class ="item item8"><img src="{{ URL('groceryimg/broccoli.jfif') }}">Broccoli</div>
        <div class ="item item9"><img src="{{ URL('groceryimg/carrot.jfif') }}">Carrot</div>
        <div class ="item item10"><img src="{{ URL('groceryimg/petchay.jfif') }}">Petchay</div>
    </div>
</body>
</html>