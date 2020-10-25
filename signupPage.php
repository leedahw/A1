<?php
//signupPage.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action = "processingSignupPage.php" method = "POST">
    First Name: <input type = "text" name ="fName"/><br/>
    <br/>
    Last Name: <input type = "text" name ="lName"/><br/>
    <br/>
    Email Address: <input type = "text" name = "emailAddress"/><br/>
    <br/>
    password: <input type = "password" name = "password"/><br/>
    <br/>
    Date of Birth: <input type = "text" name = "DOB"/>
    <br/>
    <input type = "submit">
    </form>
    
</body>
</html>