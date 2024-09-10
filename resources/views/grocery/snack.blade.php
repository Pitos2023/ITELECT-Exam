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
            <option value="/snacks">Snacks</option></option>
            <option value="/home">Vegetables</option>
            <option value="/fruits">Fruits</option>
        </select>
    </div>

    <div class ="grocery-list">
        <div class ="item item1"><img src="{{ URL('groceryimg/chippy.jfif') }}">Chippy</div>
        <div class ="item item2"><img src="{{ URL('groceryimg/nova.jfif') }}">Nova</div>
        <div class ="item item3"><img src="{{ URL('groceryimg/pringles.jfif') }}">Pringles</div>
        <div class ="item item4"><img src="{{ URL('groceryimg/doritos.jfif') }}">Doritos</div>
        <div class ="item item5"><img src="{{ URL('groceryimg/pic-a.jfif') }}">Pic-A</div>
        <div class ="item item6"><img src="{{ URL('groceryimg/mr.chips.jfif') }}">Mr.Chips</div>
        <div class ="item item7"><img src="{{ URL('groceryimg/tortillos.jfif') }}">Tortillos</div>
        <div class ="item item8"><img src="{{ URL('groceryimg/lays.jfif') }}">Lays</div>
        <div class ="item item9"><img src="{{ URL('groceryimg/fritos.jfif') }}">Fritos</div>
        <div class ="item item10"><img src="{{ URL('groceryimg/piatos.jfif') }}">Piattos</div>
    </div>
</body>
</html>