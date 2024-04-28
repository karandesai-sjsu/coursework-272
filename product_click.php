<?php

$host = 'c7gljno857ucsl.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com';
$dbname = 'deap158t3lv887';
$user = 'uafklmhq1bfrn4';
$password = 'p1a37e3af405fde74d9884bae3e173b11a78a6ca9cd4a03acfb9b2c4c8773f87e';

// Connect to PostgreSQL database
try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    die("Error: Could not connect to the database: " . $e->getMessage());
}
// Check if the product ID is provided via GET or POST method
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Prepare SQL statement to update click count
    $sql = "UPDATE product_clicks SET click_count = click_count + 1 WHERE product_id = :product_id";

    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();

    // Close the database connection
    $pdo = null;
    
    // Redirect back to the product page or wherever you want after the click
    header('Location: products.php');
    exit;
} else {
    // Handle case where product ID is not provided
    echo "Product ID is missing.";
}
// Close the database connection
$pdo = null;

// Redirect back to the product page or wherever you want after the click
header('Location: index.html');
exit;
?>
