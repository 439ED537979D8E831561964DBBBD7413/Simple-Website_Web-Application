<?php


?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HomePage</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Welcome to our Form site</h1>
        <div class="homePage" id="form">
            <form action="Success_login.php" method="post">
                <input type="text" name="username"  placeholder="userName" style="width:325px" id="input1" ><p id="p1"></p>
                <input type="password" name="password"  placeholder="Password" style="width:325px" id="input2" ><p id="p2"></p>
                <input type="submit" value="login" style="width:325px" id="login"> 
            </form>
        </div>
        <script src="Validation.js"></script>
    </body>

</html>