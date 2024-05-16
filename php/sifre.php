<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="submit">Login</button>
    </form>

    <?php
    // Check if form is submitted
    include("webProjct/Hakkında.html");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if both username and password are set
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            // Store username and password
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Check if the provided username and password match the desired values
            if ($username === "g231210557" && $password === "11223344") {
                echo "Welcome, $username!";
                // Here you can redirect to a success page or do whatever you want after successful login
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Username and password are required.";
        }
    }
    ?>
</body>
</html>
