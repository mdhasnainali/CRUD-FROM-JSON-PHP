<?php

function fetch_data_from_database(){
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
    return $books;
}

function dump_data_to_database($books){
    $booksJson = json_encode($books);
    file_put_contents('books.json', $booksJson);
}

?>
