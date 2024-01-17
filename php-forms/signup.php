<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="signup.php" method="post">
            <div>
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['signup'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $database_connection = mysqli_connect('localhost', 'root', 'your_temporary_password', 'my-shop');

    if ($database_connection->connect_error) {
        echo $database_connection->connect_error;
    }

    // Create an insert query
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

    // Execute the query
    $database_connection->query($sql);
}
?>