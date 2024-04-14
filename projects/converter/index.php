<?php
include 'converter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-div">
                <label for="temperature">Temperature</label>
                <input type="number" name="temperature" id="temperature" step="any">
                <select name="temp" id="temp">
                    <option value="celToFah">Celcius to Fahrenheit</option>
                    <option value="fahToCel">Fahrenheit to Celcius</option>
                </select>
                <input type="submit" value="Convert" name="tempSubmit">
            </div>
            <div class="form-div">
                <label for="speed">Speed</label>
                <input type="number" name="speed" id="speed" step="any">
                <select name="speeds" id="speeds">
                    <option value="kmToMs">km/h to m/s</option>
                    <option value="kmToKnots">km/h to Knots</option>
                </select>
                <input type="submit" value="Convert" name="speedSubmit">
            </div>
            <div class="form-div">
                <label for="mass">Mass</label>
                <input type="number" name="mass" id="mass" step="any">
                <select name="masses" id="masses">
                    <option value="kgtogm">kg to g</option>
                    <option value="gmtokg">g to kg</option>
                </select>
                <input type="submit" value="Convert" name="massSubmit">
            </div>
        </form>
        <div class="display-result">
            <div class="temp-result result">
                <?=$tempOutput?>
            </div>
            <div class="speed-result result">
                <?=$speedOutput?>
            </div>
            <div class="mass-result result">
                <?=$massOutput?>
            </div>
        </div>
    </div>
</body>
</html>
