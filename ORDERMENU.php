<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO NICOLAS CANTEEN, ORDER NA!</title>
</head>
<body>
    <h2>WELCOME TO NICOLAS CANTEEN, ORDER NA! </h2>
    <form action="ORDERRESULT.php" method="post">
        <p><b>Quantity</b></p>
        <ul>
            <li>Fries = 50$</li>
            <li>Burger = 100$</li>
            <li>Icecream = 150$</li>
        </ul>
        <b>Choose your order: </b>
        <select name="select_all">
            <option value="Fries">Fries</option><option value="Burger">Burger</option><option value="Icecream">Icecream</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash"> <br><br>
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>