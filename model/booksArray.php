<?php

$books = [];

$user = "root";
$pass = "";

$dbh = new PDO('mysql:host=localhost;dbname=php_mvc', $user, $pass);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=php_mvc', $user, $pass);
    foreach($dbh->query('SELECT * from books') as $row) {
        $bookData = [
            'bookname' => $row['bookname'],
            'author' => $row['author'],
            'price' => $row['price'],
            'description' => $row['description'],
            'image' => $row['image']
        ];
        $books[] = $bookData;
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>


