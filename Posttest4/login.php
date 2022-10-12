<?php
    session_start();
    if (isset($_POST['rSubmit'])) {
        $_SESSION['rSubmit'] = $_POST['rSubmit'];
        $_SESSION['Fullname'] = $_POST['Fullname'];
        $_SESSION['rUsername'] = $_POST['rUsername'];
        $_SESSION['rPassword'] = $_POST['rPassword'];
        $_SESSION['konfirmasipassword'] = $_POST['konfirmasipassword'];
        $_SESSION['BirthDate'] = $_POST['BirthDate'];
        $_SESSION['Gender'] = $_POST['Gender'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body>
    <div class="header">
        <nav>
            <a href="#main">
                <p class="logo">
                    <img src="images/logo.PNG" alt="dy_photo" width="250" title="dy_photo">
                </p>
            </a>

            <ul class="nav-link">
                <li class="nav-item">
                    <a href="#main"><i class='fas fa-home'>HOME</i></a>
                </li>
                <li class="nav-item">
                    <a href="#about"><i class='fas fa-camera-retro'>ABOUT US</i></a>
                </li>
                <li class="nav-item">
                    <b class="mode" id="mode">MODE</b>
                </li>
                <li class="nav-item">
                    <a href="login.php">LOGIN</a>
                </li>
            </ul>
        </nav>
    </div>

    <center class="form">
        <form action="index.php" method="get"> 
            <label for="username">Username</label><br>
            <input type="text" name="Username" id="username"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="Password" id="password"><br>
            
            <br><br>
            <input class="submit" type="submit" name= "Submit" value="Submit">

        </form>
    </center>
    
    <?php
        if(isset($_GET['submit']) && isset($_SESSION['regisSubmit'])){
            if($_GET['username'] == $_SESSION['regisUsername']){
                if($_GET['password'] == $_SESSION['regisPassword']){
                    echo "<h1>Login Berhasil</h1>";
                    <br><br>
                    echo $_GET['Fullname']; <br><br>
                    echo $_GET['Username']; <br><br>
                    echo $_GET['BirthDate']; <br><br>
                    echo $_GET['Gender']; <br><br>
                }
            }
        }
    ?>
    
    <center>
        <p>Belum Punya Akun ? <a href="register.php">Register</a></p>
    </center>

    <link rel="stylesheet" href="stylesheet/style.css">
</body>
</html>