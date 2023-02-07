<!-- <?php include "register.php";?> -->
<?php
session_start();
session_destroy();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            color: rgba(39, 44, 111, 0.836);
            background-color: rgba(7, 52, 52, 0.752);
            font-family: sans-serif;
            
        }
        .login{ 
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: large;

        }
.container{
    width: 480px; 
    height: 720px;
    background: url(image1.jpg);
    position: absolute;
    left: 550px;
    
}
.tbox{
    position: relative;
    left: 25%;
    top: 260px;
    
}
.login{
    display: flex;
    position: relative;
    top: 250px;
    left: 99px;
    z-index: 1;
    color: azure;
    font-style: oblique;
}
.b1{
    position: relative;
    top: 300px;
    left:115px;
    width: 220px;


}
.b2 {
    position: relative;
    top: 321px;
    left:-105px;
    width: 220px;


}
.b2 :hover{
    color: rgb(217, 68, 157);
    font-size: medium;
}
.sub{
    display: flex;
    position: relative;
    left: 300px;
    top: 239px;

}
div.font{
    font-size: small;
    font-family: 'Times New Roman', Times, serif;
    color: bisque;
    z-index: 3;
    
}


    </style>
</head>

    
    <form class="container" action="admin.php" method="post">
        <p class="login"> LOGIN</p>  
 
        <div class="tbox">
<input type="text" placeholder="@username" name="user" id="name" required><br>
                                  </div>
                                       
        <div class="tbox">
<input type="password" placeholder="password" name="password" id="pass">
                                </div>
                                <div class="sub">
<input type="submit" value="login"><br>
<input type="checkbox" id="pass" onclick="toggle()" class="font">showpassword
</div>
    <button type="button" onclick="location.href= 'http://localhost/php/portfolio/register.html'"  class="b1" name="reg">sign up</a> <br>
    <button type="button" onclick="location.href='http://localhost/php/portfolio/forgot.html'" class="b2" name="pass">reset password</a>
        

    </form>
    <script>
function toggle(){
var text1= document.getElementById('password');
if(text1.type==="password"){
    text1.type="text";
    
    
}else{
    text1.type="password";
}

}



    </script>
    <body>
    <?php

   



?>

    
</body>
</html>