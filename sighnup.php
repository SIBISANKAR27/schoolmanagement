<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Signup</title>
    <link rel="stylesheet" href="sighnup.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <nav>
                <a href="home.html" style="text-decoration: none;"><label class="logo">ABC College</label></a>
                
                <ul>
                    <li><a href="./homepage.php">Home</a></li>
                    <li><a href="">Teacher Sign Up</a></li>
                    <li><a href="">Sign In</a></li>
                </ul>
            </nav>
        </div>
        <div class="bg">

        </div>
        <div class="box">
            <form method="post" class="name">
               
                <label class="text">Teacher SignUp</label>
                <input class="input1" type="email" name="email" placeholder="E-Mail"><br>
    
                <input class="input1" type="text" name="phno" placeholder="Phone Number"><br>
                <input class="input1" type="text" name="uname" id="" placeholder="Username">
    
                <input class="input1" type="password" name="pass" id="" placeholder="Password"> <br>
    
                <input class="submit" type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php
// your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['uname'];
$password = $_POST['pass'];
$email = $_POST['email'];
$mobile = $_POST['phno'];

// Insert data into the database
$sql = "INSERT INTO user (username, password, email, number) VALUES (`$username`, `$password`, `$email`, `$mobile`)";

if ($conn->query($sql) === TRUE) {
    echo "
    <script>
    alert('success')
    window.location.href='./login.php'
    </script>";
} else {
    echo "<script>
        alert('Registration failed');
    </script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>