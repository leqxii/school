<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>circulare delicioso</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .pizza-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .pizza-label img {
            width: 325px;
            height: 225px;
        }
    </style>
</head>
<body>
    <h1>Circular Delicioso Menu</h1>
    <h2>Pizza's</h2>
    <form method="get">
        <div class="pizza-container">
            <label class="pizza-label">
                <img src="img/pizza/pizza_margaritha.png" alt="Pizza Margaritha">
                <input type="checkbox" id="margaritha" name="pizza" value="margaritha">
                Pizza Margaritha € 8,99
            </label>

            <label class="pizza-label">
                <img src="img/pizza/pizza_pepperoni.png" alt="Pizza Perfect Pepperoni">
                <input type="checkbox" id="pepperoni" name="pizza" value="pepperoni">
                Pizza Perfect Pepperoni € 8,99
            </label>

            <label class="pizza-label">
                <img src="img/pizza/pizza_salami.png" alt="Pizza Salami">
                <input type="checkbox" id="salami" name="pizza" value="salami">
                Pizza Salami € 9,49
            </label>

            <label class="pizza-label">
                <img src="img/pizza/pizza_funghi.png" alt="Pizza Funghi">
                <input type="checkbox" id="funghi" name="pizza" value="funghi">
                Pizza Funghi € 8,99
            </label>

            <label class="pizza-label">
                <img src="img/pizza/pizza_shoarma.png" alt="Pizza Shawarma">
                <input type="checkbox" id="shoarma" name="pizza" value="shoarma">
                Pizza Shawarma € 13,49
            </label>

            <label class="pizza-label">
                <img src="img/pizza/pizza_tonno.png" alt="Pizza Tonno">
                <input type="checkbox" id="tonno" name="pizza" value="tonno">
                Pizza Tonno € 14,49
            </label>
        </div>
        <br>

        <h2>Extra's</h2>
        <label>
            <input type="checkbox" id="cheese" name="extra's" value="cheese">
            Extra Cheese € 2,00
        </label>

        <label>
            <input type="checkbox" id="olives" name="extra's" value="olives">
            Extra Olives € 3,00
        </label>
        <br>
        <br>

        <label>
            <input type="checkbox" id="bezorgkosten" name="extra's" value="bezorgkosten">
            Wil je de pizza laten bezorgen? € 3,50
        </label>
        <br>
        <input type="submit" name="bestelling" value="Bestellen!">
    <form>
        
</body>
</html>