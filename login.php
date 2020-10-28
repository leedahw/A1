<?php
//login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action = "process-login.php" method = "POST">
    emailAddress: <input type = "email" name ="emailAddress" required/><br/>
    <br/>
    password: <input type = "password" name = "password" required/><br/>
    <br/>
    <input type = "submit" value="login">
    </form>
    
</body>
</html>