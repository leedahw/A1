<?php session_start();
if ($_SESSION["userType"] == 'admin'){
    //allowed to see this page
    include('includes/standardheader.html'); ?>
    <h2>Contact Submissions</h2>
    

    <?php
    include('includes/dbconfig.php');

    $stmt = $pdo->prepare("SELECT * FROM `contactsubmission`");

    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("<p>");?>
        <label>ID: </label><?php echo($row["submissionId"]);?><br/>
        <label>Name: </label><?php echo($row["name"]);?><br/>
        <label>EmailAddress: </label><?php echo($row["emailAddress"]);?><br/>
        <label>Interests: </label><?php echo($row["interests"]);?><br/>
        <label>Role: </label><?php echo($row["userRole"]);
        echo("</p>");
    }
}else{
    //do NOT show page
    ?>
    <p> ACCESS DENIED. Please go back to Home here:</p>
    <a href = "homepage.php">Home</a><?php
}
?>