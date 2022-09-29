<?php
require_once('database.php');
// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
// Delete the product from the database
if ($product_id != false && $category_id != false) {
    $query = 'UPDATE products
 
SET name= Gibson Les Paul

WHERE productID = :product_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $sucess = $statement->execute();
    $statement->closeCursor();
}
// Display the Product List page
include('index.php');
