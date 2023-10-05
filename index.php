<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BookShop</title>
</head>
<body>
    <h1>Book Shop</h1>
    <h3>Books List:</h3>
    <?php
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
        
        // displaying books in a table
        echo '<table>';
        echo '<tr><th>Title</th><th>Author</th><th>Pages</th><th>ISBN</th><th>Status</th></tr>';
        foreach($books as $book) {
            echo '<tr>';
            echo '<td>' . $book['title'] . '</td>';
            echo '<td>' . $book['author'] . '</td>';
            echo '<td>' . $book['pages'] . '</td>';
            echo '<td>' . $book['isbn'] . '</td>';
            echo '<td>' . ($book['available'] ? 'Available' : 'Not Available') . '</td>';
            echo '</tr>';
        }
    ?>

</body>
</html>