<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://localhost/php/portfolio/newstyle.css" type="text/css">
    <h1>This is student home page<h2><?php echo $_SESSION["username"]?>
</head>
<body>
    <button type="button" class="btn-2" onclick="location.href='http://localhost/php/portfolio/project.php'">log-out
    
</body>
</html>