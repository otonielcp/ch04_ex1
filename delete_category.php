
<?php
// Get category id
$category_id = $_POST['category_id'];
require_once('database.php');
// delete category from the database table
$query = "DELETE FROM categories WHERE categoryID = '$category_id'";
$db->exec($query);
// show category list page
include('category_list.php');
?>