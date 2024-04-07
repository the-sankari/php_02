<?php

function addition($number1, $number2)
{
    return $number1 + $number2;
}

function substraction($number1, $number2)
{
    return $number1 - $number2;
}

function multiplication($number1, $number2)
{
    return $number1 * $number2;
}

function dividation($number1, $number2)
{
    return $number1 / $number2;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // check for post method
    if (isset($_POST['submit'])) { // check for submit button is in action
        if (!empty($_POST['number1']) && !empty($_POST['number2'])) { // check for input fields are not empty
            // assign the values
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];

            if (isset($_POST['method'])) {

                $method = $_POST['method'];

                switch ($method) {
                    case "addition":
                        $result = "Addition: " . addition($number1, $number2);
                        break;
                    case "substraction":
                        $result = "Subtraction: " . substraction($number1, $number2);
                        break;
                    case "multiplicaiton":
                        $result = "Multiplication: " . multiplication($number1, $number2);
                        break;
                    case "dividation":
                        if ($number2 != 0) {
                            $result = "Division: " . dividation($number1, $number2);
                        } else {
                            die("Error! Cannot divide by zero");
                        }
                        break;
                    default:
                        die("Invalid Operation");
                }
            }

        } else {
            die("Both inputs must be filled out!");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
      <h2>Calculator</h2>
    </header>
    <main class="container">
      <div>
      <p class="result"><?=$result?></p>
        <form action="index.php" method="post">
          <div>
            <label for="number1">Number 1</label>
            <input type="number" name="number1" id="number1" />
          </div>
          <div>
            <label for="number2">Number 2</label>
            <input type="number" name="number2" id="number2" />
          </div>
          <div class="options">
            <select name="method" id="method">
              Choose a mehtod

              <option value="addition">Add</option>
              <option value="substraction">Substract</option>
              <option value="multiplicaiton">Multiply</option>
              <option value="dividation">Divide</option>
            </select>
          </div>
          <input type="submit" name="submit" value="Calculate" />
        </form>
      </div>
    </main>
  </body>
</html>
