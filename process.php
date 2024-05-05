<?php
// Assuming you have a MySQL database setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO orders (full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssss", $full_name, $email, $address, $city, $state, $zip_code, $card_name, $card_number, $exp_month, $exp_year, $cvv);

// Set parameters and execute
$full_name = $_POST['full_name'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$zip_code = $_POST['zip_code'] ?? '';
$card_name = $_POST['card_name'] ?? '';
$card_number = $_POST['card_number'] ?? '';
$exp_month = $_POST['exp_month'] ?? '';
$exp_year = $_POST['exp_year'] ?? '';
$cvv = $_POST['cvv'] ?? '';

if ($stmt->execute()) {
    header("Location: response.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
