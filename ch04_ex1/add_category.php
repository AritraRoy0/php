<?php
// Get the category name from the form
$name = filter_input(INPUT_POST, 'name');

// Validate input
if ($name == null || trim($name) == '') {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the category to the database
    $query = 'INSERT INTO categories (categoryName)
              VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', trim($name));
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php');
}
?>