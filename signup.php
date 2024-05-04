<?php
    // Database credentials
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
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css1/signup.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">  
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="button-container">
                <button type="submit">Sign Up</button>
            </div>
            <p>Already have an account? <a href="loggin.php">Log in</a></p>
            <p>Or sign up with:</p>
            <button type="button" class="social-btn">G</button>
        </form>
    </div>
</body>
</html>

<?php


    // Process form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define variables and initialize with empty values
        $email = $password = $confirm_password = "";
        
        // Retrieve form data
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        } else {
            // Validate password
            if (strlen($password) < 6) {
                echo "Password must have at least 6 characters";
            } elseif ($password != $confirm_password) {
                echo "Passwords do not match";
            } else {
                // Password and email are valid, insert into database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password before saving in database
                
                // Prepare an insert statement
                $sql = "INSERT INTO unmpw (email, pw) VALUES ('{$email}','{$password}')";
                
                if ($conn->query($sql)==true)  {
                    echo "<script>alert('record added');
                    location.replace('loggin.php')</script>";
                    
                }else{
                    echo "<script>alert('record added')</script>";
                }
            }
        }
    }

    // Close connection
    $conn->close();
    ?>
