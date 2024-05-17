<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist (1)/css/bootstrap.css">
    <title>Rania's Website</title>
    <title>Login</title>
</head>
<body>
<div class="container-fluid">
        <div class="row justify-content-center">
            <header>
                <div class="col-12">
                    <p id="Hello">Hello..!</p>
                </div>
                <div class="col-12">
                    <p id="welcome">-Welcome to my website-</p>   
                </div>
            </header>
        </div>
        <nav>
            <div class="row">
                <div class="col-xs-6 col-xl-1">
                    <a href="Hakkimda.html"> <p class="secenekler">Hakkımda</p></a>
                </div>
                <div class="col-xs-6 col-xl-1 ">
                    <a href="şehrim.html"><p class="secenekler">Şehrim</p></a>
                </div>
                <div class="col-xs-6 col-xl-1">
                    <a href="mirasimiz.html" ><p class="secenekler">mirasımız</p></a> 
                </div>
                <div class="col-xs-6 col-xl-1">
                    <a href="ilgiliAlan.html"><p class="secenekler">İlgili Alanlarım</p></a>
                </div>
                <div class="col-xs-6 col-xl-1">
                    <a href="CV.html"><p class="secenekler">CV</p></a>
                </div>
                <div class="col-xs-6 col-xl-1">
                    <a href="İletişim.html" ><p class="secenekler">İletişim</p></a> 
                </div>
                <div class="col-xs-6 col-xl-1">
                    <a href="login.html" ><p class="secenekler">Log in</p></a> 
                </div>
                <div class="col-6 col-xl-5 d-none d-sm-block">
                    <a href="https://en.wikipedia.org/wiki/Computer_engineering" target="_blank">
                        <img src="icons/girl.png" id="kiz" class="d-none d-sm-inline">
                    </a>
                </div>
            </div>
        </nav>
        <main>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="submit">Login</button>
    </form>
    </main>
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
