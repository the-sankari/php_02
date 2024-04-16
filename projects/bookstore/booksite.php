<?php
include_once 'db.php';
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["addbook"])) {

        if (
            isset($_POST['title']) &&
            isset($_POST['author']) &&
            isset($_POST['genre']) &&
            isset($_POST['publishing_year']) &&
            isset($_POST['description'])
        ) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $genre = $_POST['genre'];
            $publishing_year = $_POST['publishing_year'];
            $description = $_POST['description'];

            $stmt = $conn->prepare("INSERT INTO books (title, author, genre, publishing_year, description)VALUES(?,?,?,?,?)");
            if (!$stmt) {
                echo "Prepare failed: " . $conn->error;
            }
            $stmt->bind_param("sssis", $title, $author, $genre, $publishing_year, $description);

            $stmt->execute();

            $stmt->close();
        }
    }

}

$sql = 'SELECT * FROM books';
$result = $conn->query($sql);

$rows = array();

while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
