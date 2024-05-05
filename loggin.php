<?php
    require "database.php";
    session_start();
    if(isset($_POST["btn-login"])){
        $un = $_POST["username"];
        $pw = $_POST["password"];

        $sql = "SELECT email,pw FROM unmpw WHERE email='".$un."';";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $db_un = $row["email"];
                $db_pw = $row["pw"];

                if($db_pw == $pw && $db_un == $un){
                    $_SESSION["logged_user"] = $db_un;
                    echo "<script>alert('login success');
                    location.replace('index.php')</script>";                        
                }else{
                    echo "<script>alert('login Failed
                    ');</script>";
                }
            }
        }else{
            echo "<script>alert('No Record Found');</script>";
        } 
    
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loggin.css">
</head>
<body>
        <div class="row">
            <div class="col-2 one"></div>
            <div class="col-2 two">
                <div class="login-column">
                    <h1>Login</h1>
                    <form method="post">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                        <input type="submit" name="btn-login" value="Login" class="btn-login">
                    </form>
                    <a href="#">Forgot password?</a><br>
                    <a href="signup.php">Signup</a>
                </div>
            </div>
        </div>
</body>
</html>


