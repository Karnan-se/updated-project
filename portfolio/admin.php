<?php

$conn=mysqli_connect("localhost","root","","visitor");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["user"];
    $password=$_POST["password"];

    $sql="SELECT *FROM visitors WHERE fname= '".$username."' AND password= '".$password."' ";
    
}
// IN MY DATABASE KARNAN IS ADMIN PASSWORD IS 123;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row["companyname"]=="admin"){
    $_SESSION["username"]=$username;

    header("location:adminpage.php");
}
elseif($row["companyname"]=="student"){
    $_SESSION["username"]=$username;
    header("location:student.php");

}
else{
    echo "user doesn't exist signup";
}


?>

