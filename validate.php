<?php
function redirect($url) {   
    header("Location: $url");
    exit();
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username;
    // echo $password;
    // echo "<br>";

    // Read CSV file
    $csvFile = 'users.csv';
    $csvData = file($csvFile);

    // Loop through CSV data
    foreach ($csvData as $line) {
        $data = str_getcsv($line);
        $login_success = false;
        // Check if username and password match
        if ($data[0] == $username || $data[1] == $password) {
            $login_success = true;
            // Authentication successful
            redirect('contact.php');
            exit; // Stop further processing
        }
    }

    // If no match found
    if (!$login_success) {
    echo "Invalid username or password.";
    }
}

?>