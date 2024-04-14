<?php
$tempOutput = "";
$speedOutput = "";
$massOutput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Temperature Conversion Validation
    if (isset($_POST['tempSubmit'])) {
        if (isset($_POST['temperature']) && is_numeric($_POST['temperature'])) {
            $temperature = $_POST['temperature'];
            $conversionType = $_POST['temp'];

            if ($conversionType === 'celToFah') {
                $result = ($temperature * 9 / 5) + 32;
                $tempOutput = "<p>{$temperature}°C is equal to {$result}°F</p>";
            } elseif ($conversionType === 'fahToCel') {
                $result = ($temperature - 32) * 5 / 9;
                $tempOutput = "<p>{$temperature}°F is equal to {$result}°C</p>";
            }
        } else {
            $tempOutput = "<p class='errors'>Please enter a valid temperature.</p>";
        }
    }

    // Speed Conversion Validation
    if (isset($_POST['speedSubmit'])) {
        if (isset($_POST['speed']) && is_numeric($_POST['speed'])) {
            $speed = $_POST['speed'];
            $conversionType = $_POST['speeds'];

            if ($conversionType === 'kmToMs') {
                $result = round($speed * 1000 / 3600, 2);
                $speedOutput = "<p>{$speed} km/h is equal to {$result} m/s</p>";
            } elseif ($conversionType === 'kmToKnots') {
                $result = round($speed * 0.539957, 2);
                $speedOutput = "<p>{$speed} km/h is equal to {$result} Knots</p>";
            }
        } else {
            $speedOutput = "<p class='errors'>Please enter a valid speed.</p>";
        }
    }

    // Mass Conversion Validation
    if (isset($_POST['massSubmit'])) {
        if (isset($_POST['mass']) && is_numeric($_POST['mass'])) {
            $mass = $_POST['mass'];
            $conversionType = $_POST['masses'];

            if ($conversionType === 'kgtogm') {
                $result = round($mass * 1000, 2);
                $massOutput = "<p>{$mass} kg is equal to {$result} g</p>";
            } elseif ($conversionType === 'gmtokg') {
                $result = round($mass / 1000, 4);
                $massOutput = "<p>{$mass} g is equal to {$result} kg</p>";
            }
        } else {
            $massOutput = "<p class='errors'>Please enter a valid mass.</p>";
        }
    }
}
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
