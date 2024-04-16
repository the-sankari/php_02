<?php
include_once 'db.php';

$sql = 'SELECT * FROM books';
$result = $conn->query($sql);

$rows = array();

while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

?>