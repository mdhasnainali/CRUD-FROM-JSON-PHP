
<?php
    // include the function
    include_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/dest/tailwind.css">
    <link rel="stylesheet" href="./assets/src/style.css">
    <title>BookShop</title>
</head>
<body class="bg-indigo-100">
    <h1 class="font-bold text-3xl text-center py-5">Rajshahi Book Shop</h1>
    <h3 class="text-center text-xl font-semibold">Add New Books</h3>

    <!-- displaying books in a table -->
    <form action="controller.php" method="POST" class="w-full flex flex-col py-10">
        <input type="hidden" name="operation" value="add">
        <input type="text" class="w-96 mx-auto py-2 my-2 rounded px-2" placeholder="Book Title" name="title" required>
        <input type="text" class="w-96 mx-auto py-2 my-2 rounded px-2" placeholder="Author" name="author" required>
        <input type="text" class="w-96 mx-auto py-2 my-2 rounded px-2" placeholder="Pages" name="pages" required>
        <input type="text" class="w-96 mx-auto py-2 my-2 rounded px-2" placeholder="ISBN" name="isbn" required>
        <select class="w-96 mx-auto py-2 my-2 rounded px-2" required>
            <option value="Status" hidden >Status</option>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
        </select>
        <button type="submit" class="my-5 px-5 py-2 rounded mx-auto bg-green-400">Add This Book</button>
    </form>

</body>
</html>