<?php
//signup-page.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action = "process-signup.php" method = "POST">
    First Name: <input type = "text" name ="fName" required/><br/>
    <br/>
    Last Name: <input type = "text" name ="lName" required/><br/>
    <br/>
    Email Address: <input email = "text" name = "emailAddress" required/><br/>
    <br/>
    password: <input type = "password" name = "password" required/><br/>
    <br/>
    Date of Birth: <input type = "text" name = "DOB"/>
    <br/>
    <input type = "submit">
    </form>
    
</body>
</html>