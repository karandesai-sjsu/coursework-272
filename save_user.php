<?php
function redirect($url) {   
    header("Location: $url");
    exit();
}

// Database connection settings
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

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$home_address = $_POST['home_address'];
$home_phone = $_POST['home_phone'];
$cell_phone = $_POST['cell_phone'];

// Prepare SQL statement to insert user data into the users table
$sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) 
        VALUES (:first_name, :last_name, :email, :home_address, :home_phone, :cell_phone)";

// Prepare and execute the SQL statement
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':home_address', $home_address);
$stmt->bindParam(':home_phone', $home_phone);
$stmt->bindParam(':cell_phone', $cell_phone);

if ($stmt->execute()) {
    echo "User data saved successfully!";
    redirect('user.php');
} else {
    echo "Error: Unable to save user data.";
}


// Close the database connection
$pdo = null;
?>
