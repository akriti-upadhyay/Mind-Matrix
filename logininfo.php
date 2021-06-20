<?php
 $servername = "server173.web-hosting.com";
$database = "appy79_m-matrix";
$user = "appy79_m-matrix";
$password = "205120041khushboo";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from Registration where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
      $_SESSION['loggedin']=true;
   
    $_SESSION['username']=$username;
    $sid=$_SESSION['username'];
    $sql = "INSERT INTO `session` (`sid`, `time`) VALUES ('$sid', current_timestamp())";


$result = mysqli_query($conn,$sql);
     if($conn->query($sql) == true)
{
//    echo "Data Successfully Inserted!!";
    $inserts=true;
}

$conn->close();
	header('Location:login2.php') ;

    
}


else{
header('Location:index.html') ;

 }
 ?>