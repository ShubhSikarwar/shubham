<?php

$userName = $_REQUEST['adminUserName'];
$password = $_REQUEST['adminPassword'];

if (isset($_REQUEST['login'])) {
    
        
}


?>


<html>
<head>
    <title>:: Login ::</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <script type="../text/javascript" src="js/move-top.js"></script>
    <script type="../text/javascript" src="js/easing.js"></script>
</head>
<body> 
    <div class="header" id="home">
        <div class="container">
            <div class="banner-center">
                <h1>Login</h1>
                <form method="post">
                    <p>
                        <label for="username" ><span>Username:</span></label>
                        <input class="text-box" type="text" name="adminUserName" value=" ">
                    </p>
                    <p>
                        <label for="password" ><span>Password:</span></label>
                        <input class="text-box" type="password" name="adminPassword" value="">
                    </p>
                    <p>
                        <input class="login-btn" type="submit" value="Login" name="login">
                    </p>
                </form> 
            </div>
        </div>
    </div>
    <?php include("../footer.php"); ?>
    </body>
</html>