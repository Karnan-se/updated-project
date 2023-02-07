<?php
SESSION_start();
if(!isset($_SESSION["username"])){
    header("location:project.php");
}

/*i actually dont know hpw to make static content in admin need more clarification
but i think i had made framework of the project like to get feedback  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://localhost/php/portfolio/newstyle.css" type="text/css">
    <h1>This is admin home page<h2><?php echo $_SESSION["username"]?>
</head>
<body>
    <button type="button" class="btn-1" onclick="location.href='http://localhost/php/portfolio/project.php'">log-out
    
</body>
</html>