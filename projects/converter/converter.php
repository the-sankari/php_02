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
                $result = round(($temperature * 9 / 5) + 32, 2);
                $tempOutput = "<p>{$temperature}°C is equal to {$result}°F</p>";
            } elseif ($conversionType === 'fahToCel') {
                $result = round(($temperature - 32) * 5 / 9, 2);
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
