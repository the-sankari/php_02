<?php

function convertTemperature($temperature, $conversionType) {
    if ($conversionType === 'celToFah') {
        return round(($temperature * 9 / 5) + 32, 2);
    } elseif ($conversionType === 'fahToCel') {
        return round(($temperature - 32) * 5 / 9, 2);
    }
}

function convertSpeed($speed, $conversionType) {
    if ($conversionType === 'kmToMs') {
        return round($speed * 1000 / 3600, 2);
    } elseif ($conversionType === 'kmToKnots') {
        return round($speed * 0.539957, 2);
    }
}

function convertMass($mass, $conversionType) {
    if ($conversionType === 'kgtogm') {
        return round($mass * 1000, 2);
    } elseif ($conversionType === 'gmtokg') {
        return round($mass / 1000, 4);
    }
}

$tempOutput = "";
$speedOutput = "";
$massOutput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Temperature Conversion Validation
    if (isset($_POST['tempSubmit'])) {
        if (isset($_POST['temperature']) && is_numeric($_POST['temperature'])) {
            $temperature = $_POST['temperature'];
            $conversionType = $_POST['temp'];

            $result = convertTemperature($temperature, $conversionType);
            $tempOutput = "<p>". htmlspecialchars($temperature). "°". htmlspecialchars($conversionType). " is equal to ". htmlspecialchars($result). "°". htmlspecialchars(str_replace("To", "To", $conversionType)). "</p>";
        } else {
            $tempOutput = "<p class='errors'>Please enter a valid temperature.</p>";
        }
    }

    // Speed Conversion Validation
    if (isset($_POST['speedSubmit'])) {
        if (isset($_POST['speed']) && is_numeric($_POST['speed'])) {
            $speed = $_POST['speed'];
            $conversionType = $_POST['speeds'];

            $result = convertSpeed($speed, $conversionType);
            $speedOutput = "<p>". htmlspecialchars($speed). " ". htmlspecialchars($conversionType). " is equal to ". htmlspecialchars($result). " ". htmlspecialchars(str_replace("To", "To", $conversionType)). "</p>";
        } else {
            $speedOutput = "<p class='errors'>Please enter a valid speed.</p>";
        }
    }

    // Mass Conversion Validation
    if (isset($_POST['massSubmit'])) {
        if (isset($_POST['mass']) && is_numeric($_POST['mass'])) {
            $mass = $_POST['mass'];
            $conversionType = $_POST['masses'];

            $result = convertMass($mass, $conversionType);
            $massOutput = "<p>". htmlspecialchars($mass). " ". htmlspecialchars($conversionType). " is equal to ". htmlspecialchars($result). " ". htmlspecialchars(str_replace("To", "To", $conversionType)). "</p>";
        } else {
            $massOutput = "<p class='errors'>Please enter a valid mass.</p>";
        }
    }
}

?>

