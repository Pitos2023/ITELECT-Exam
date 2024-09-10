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
            <option value="/fruits">Fruits</option>
            <option value="/home"><a href="/fruits">Vegetables</a></option>
            <option value="/snacks">Snacks</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1"><img src="{{ URL('groceryimg/avocado.jfif') }}">Avocado</div>
        <div class ="item item2"><img src="{{ URL('groceryimg/dragonfruit.jfif') }}">Dragonfruit</div>
        <div class ="item item3"><img src="{{ URL('groceryimg/mango.jfif') }}">Mango</div>
        <div class ="item item4"><img src="{{ URL('groceryimg/orange.jfif') }}">Orange</div>
        <div class ="item item5"><img src="{{ URL('groceryimg/strawberry.jfif') }}">Strawberry</div>
        <div class ="item item6"><img src="{{ URL('groceryimg/pineapple.jfif') }}">Pineapple</div>
        <div class ="item item7"><img src="{{ URL('groceryimg/watermelon.jfif') }}">Watermelon</div>
        <div class ="item item8"><img src="{{ URL('groceryimg/pear.jfif') }}">Pear</div>
        <div class ="item item9"><img src="{{ URL('groceryimg/grapes.jfif') }}">Grapes</div>
        <div class ="item item10"><img src="{{ URL('groceryimg/kiwi.jfif') }}">Kiwi</div>
    </div>
</body>
</html>