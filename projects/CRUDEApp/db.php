<?php
// Database host
$db_host = 'localhost';
$db_name = 'loginApp';
$db_user = 'root';
$db_pass = 'lionPass';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die('Connection to database failed');
}
