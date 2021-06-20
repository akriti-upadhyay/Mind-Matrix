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
    $userID=$_GET['userID'];
    $pass=$_GET['pass'];
    
    $sql="select * from source where userID='$userID' and pass='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location:welcome.php') ;   
    }
    else {
        header('Location:Source-Me.html') ;
    }
?>

