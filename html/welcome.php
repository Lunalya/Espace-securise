<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="stylewelcome.css">
    <style type="text/css">
    </style>
</head>
<body>

    <div class="item">

          <div class="block">

            <span class="circleLight"></span>

            <div class="container">
    
        <h1>Hey, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur mon site.</h1>
    <p>
        <a href="logout.php" class="btn-out">Déconnexion</a>
    </p>
</div>
</div>
</div>

</body>
</html>

