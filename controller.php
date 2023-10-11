<?php

require_once('./functions.php');

$books = fetch_data_from_database();

if($_POST["operation"] == "delete"){
    $index = intval($_POST["index"]);
    array_splice($books, $index, 1);
    dump_data_to_database($books);
    header('Location: index.php');
}
else if($_POST["operation"] == "edit"){
    $index = intval($_POST["index"]);
    $books[$index]["title"] = $_POST["title"];
    $books[$index]["author"] = $_POST["author"];
    $books[$index]["pages"] = $_POST["pages"];
    $books[$index]["isbn"] = $_POST["isbn"];
    $books[$index]["available"] = $_POST["available"] === "Available"?true:false;
    dump_data_to_database($books);
    header('Location: index.php');
}
else if($_POST["operation"] == "add"){
    $book["title"] = $_POST["title"];
    $book["author"] = $_POST["author"];
    $book["pages"] = $_POST["pages"];
    $book["isbn"] = $_POST["isbn"];
    $book["available"] = $_POST["available"] === "Available"?true:false;
    array_push($books, $book);
    dump_data_to_database($books);
    header('Location: index.php');
}

?>