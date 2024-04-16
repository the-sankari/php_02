<?php
include 'booksite.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Book Bazar</h1>
    <form action="index.php" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="year">Year</label>
            <input type="text" name="year" id="year">
        </div>
        <div>
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre">
        </div>
        <div class="textarea">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Add Book">
        </div>
    </form>
    <div>
        <table class="default-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Publishing year</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
        <?php if ($result->num_rows > 0): ?>
        <?php foreach ($result as $row): ?>
        <tr data-id="<?=$row['id']?>">
          <td><?=$row["id"]?></td>
          <td><?=$row["title"]?></td>
          <td><?=$row["description"]?></td>
          <td><?=$row["author"]?></td>
          <td><?=$row["publishing_year"]?></td>
          <td><?=$row["genre"]?></td>
        </tr>
        <?php endforeach;?>
        <?php else: ?>
        <tr>
          <td colspan='4'>No results</td>
        </tr>
        <?php endif;?>
      </tbody>
        </table>
    </div>
    </div>
</body>
</html>
