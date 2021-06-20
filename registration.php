<?php
$servername = "server173.web-hosting.com";
$database = "appy79_m-matrix";
$user = "appy79_m-matrix";
$password = "205120041khushboo"; // Use the correct password here
// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name= $_POST['name'];
$email= $_POST['email'];
$rollno= $_POST['rollno'];
$username= $_POST['username'];
$institute_name= $_POST['institute_name'];
$password=$_POST['password'];
	$sql="INSERT INTO Registration (name,email,rollno,username,institute_name,password) values ('$name','$email','$rollno','$username','$institute_name','$password')";
$rs=mysqli_query($conn,$sql);										
if($rs)
{    	$sql1="INSERT INTO leaderboard (name,rollno,score,count,count1) values ('$name','$rollno',0,0,1)";
        $rs1=mysqli_query($conn,$sql1);
        if($rs1)
        {
            

     header("Location: login.html");
        }
}
else
{
     header("Location: index.html");
}
?>