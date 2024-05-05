

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/global.css">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">

     <!-- FONT AWESOME CSS REFERENCE-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
     <script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
<form action="admin_connect.php" method="post">
<main>
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login">
                <div class="login-pic">
                    <img src="./login-icon-png-27.png" alt="IMG">
                </div>
                <form class="login-form" action="../newVersion_admintable.html" onsubmit="return validate()">
                    <span class="login-form-title">
                        Administrator Login
                    </span>
                    <div class="wrap-input">
                        <input class="input" type="text" name="email" id="username" placeholder="Email">
                        <span class="focus-input"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                
                    <div class="wrap-input">
                        <input class="input" type="password" name="pass" id="password" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login-form-btn"></div>
                    <a href="dashboard.php"><button  class="login-form-btn" name="submit" type="submit">Login</button></a>
                    </form>
                </div>
            </div>
        </div>
    
    <script src="../js/admin_login.js"></script>
    <script src="../js/toggler.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>