

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>lastname</th>
            <th>class</th>
    
</body>
</html>



<?php
if(isset($_POST["submit"])){
    $name=$_POST["fname"];
    $lname=$_POST["lname"];
    $comp=$_POST["organisation"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    
}else{
    "error";
}





$conn=mysqli_connect("localhost","root", "","visitor");
// $sql="CREATE DATABASE visitor";
// if(mysqli_query($conn,$sql)){
//     echo "data base created";
// }
// $sql="CREATE TABLE visitors(num INT(10)AUTO_INCREMENT PRIMARY KEY,fname VARCHAR(30) ,lname varchar(30),emailid varchar(35),companyname varchar(30))";
// if(mysqli_query($conn,$sql)){
//     echo "table created";
// }
$sql="INSERT INTO visitors(fname,lname,emailid,companyname,gender) VALUES ('$name','$lname','$email','$comp','$gender')";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</tr></td>";
         
    }echo "</table>";
}else{
        echo "error";
    }
?>