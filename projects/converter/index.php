<?php
include 'converter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Converter</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h2>Converter</h2>
    </header>
    <main class="container">
        <div>
            <p class="result"><?=$tempOutput?></p>
            <form action="index.php" method="post">
                <div>
                    <label for="temperature">Temperature</label>
                    <input type="number" name="temperature" id="temperature" />
                </div>
                <div class="options">
                    <select name="temp" id="temp">
                        <option value="celToFah">Celsius to Fahrenheit</option>
                        <option value="fahToCel">Fahrenheit to Celsius</option>
                    </select>
                </div>
                <input type="submit" name="tempSubmit" value="Convert" />
            </form>
        </div>
        <div>
            <p class="result"><?=$speedOutput?></p>
            <form action="index.php" method="post">
                <div>
                    <label for="speed">Speed</label>
                    <input type="number"name="speed" id="speed" />
                </div>
                <div class="options">
                    <select name="speeds" id="speeds">
                        <option value="kmToMs">Kilometers per hour to Meters per second</option>
                        <option value="kmToKnots">Kilometers per hour to Knots</option>
                    </select>
                </div>
                <input type="submit" name="speedSubmit" value="Convert" />
            </form>
        </div>
        <div>
            <p class="result"><?=$massOutput?></p>
            <form action="index.php" method="post">
                <div>
                    <label for="mass">Mass</label>
                    <input type="number" name="mass" id="mass" />
                </div>
                <div class="options">
                    <select name="masses" id="masses">
                        <option value="kgtogm">Kilograms to Grams</option>
                        <option value="gmtokg">Grams to Kilograms</option>
                    </select>
                </div>
                <input type="submit" name="massSubmit" value="Convert" />
            </form>
        </div>
    </main>
</body>
</html>