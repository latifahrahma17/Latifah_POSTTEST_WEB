
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
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
        <form action="index.php" method="post">
            <label for="fullname">Fullname</label><br>
            <input type="text" name="Fullname" id="fullname"><br><br> 
    
            <label for="username">Username</label><br>
            <input type="text" name="rUsername" id="username"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="rPassword" id="password"><br><br>
            
            <label for="password">Konfirmasi Password</label><br>
            <input type="password" name="konfirpassword" id="konfirpassword"><br><br>
    
            <label for="birthdate">Birth Date</label><br>
            <input type="date" name="BirthDate" id="birthdate"><br><br>
    
            <input type="radio" name="Gender" id="gender">
            <label for="gender">Laki-Laki</label>
    
            <input type="radio" name="Gender" id="gender">
            <label for="gender">Perempuan</label>
            
            <br><br>
            <input class="submit" type="submit" name="rSubmit"  value="Submit">
        </form>
    </center>
    
    <link rel="stylesheet" href="stylesheet/style.css">
</body>
</html>