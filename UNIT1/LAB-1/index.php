<?php
    echo "<title>Login Page | PHP Lab 1</title>";
    echo "<center>";
    echo "<h1>Login Page</h1>";
    echo "<form method='post' action='index.php'>";
    
    echo "Enter Username: <input type='text' id='username' name='username' required><br><br>";
    echo "Enter Password: <input type='password' id='password' name='password' required><br><br>";
    echo "<input type='submit' value='Login'>";

    echo "</form>";
    echo "</center>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "suman" && $password === "123456") {
            echo "<center><h2 style='color: green;'>Login successful! Welcome, Suman.</h2></center>";
            header("Location: home.php");
            exit();
        } else {
            echo "<center><h2 style='color: red;'>Login failed! Invalid username or password.</h2></center>";
        }
    }
?>