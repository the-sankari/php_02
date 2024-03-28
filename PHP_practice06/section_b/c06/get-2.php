<?php include 'includes/header.php'?>
<?php
/* Write your code here
Overall idea here is to use query string to select content

Step 1: Store the value of city in some variable,
what happens let us say if a key called "city" and its value is not null
Hint: try using nullishing coalescing operator: ??
https://www.php.net/manual/en/migration70.new-features.php

Step 2: You can check the condition with an if statement. If the value
is a string that is not empty, the PHP interpreter treats that value as true
and runs the code block

Step 3: Store the value of address of the branch in the city
that was named in the query string

Step 4:  If the value in the city is a blank string it should display
"Please select a city"

 */

$cities = [
    'London' => '48 Store Street, WC1E 7BS',
    'Helsinki' => 'Kaivokatu 1, 00100 Helsinki',
    'Sydney' => '1242 7th Street, 10492',
];

$city = $_GET['city'] ?? '';

if (!$city == '') {
    $address = $cities[$city];
} else {
    $address = "Please select a city";
}

?>

  <?php foreach ($cities as $key => $value) {?>
    <a href="get-2.php?city=<?=$key?>"> <?=$key?></a>
  <?php }?>

  <p>
  <?=
!$city == '' ? "{$city} store address:<br> {$address}" : $address;

?>
