<?php

    // Get user input & Prevent SQL Injection
    $description = $_POST["product_description"];
    $price = filter_input(INPUT_POST, "list_price",);
    $discount_percentage = filter_input(INPUT_POST, "discount_percent");
    
    // Calculate discount 
    $discount_amount = $price * $discount_percentage / 100;
    $discount_price = $price - $discount_amount;
            
    $escaped_description = htmlspecialchars($description)
            
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>
        
        <label>Product Description:</label>
        <span><?php echo $escaped_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$".number_format($price, 2); ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo $discount_percentage."%"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$".number_format($discount_amount, 2); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$".number_format($discount_price, 2); ?></span><br>
    </main>
</body>
</html>