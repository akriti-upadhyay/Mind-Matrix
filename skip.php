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
    session_start();
    $username=$_SESSION['username'];
   $sql="select * from Registration where username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  
   $row = mysqli_fetch_array($result);
    $k=$row['name'];
  $sql0="select * from leaderboard where name='$k'";
    $result0 = mysqli_query($conn, $sql0);
  if (mysqli_num_rows($result0) > 0) {
    $row1 = mysqli_fetch_array($result0);
    $k1=$row1['count1'];
    $k10=$row1['count'];
     $sql1 = "UPDATE leaderboard SET count = 0 WHERE name='$k'";
$result1 = mysqli_query($conn,$sql1);
 $sql2 = "UPDATE leaderboard SET count1=count1+1 WHERE name='$k'";
$result2 = mysqli_query($conn,$sql2);
  $sql3="select * from leaderboard where name='$k'";
    $result3 = mysqli_query($conn, $sql3);

   if (mysqli_num_rows($result3) > 0) {
    $row2 = mysqli_fetch_array($result3);
    $k2=$row2['count1'];
    if($k2==2)
	header('Location:quests2.php') ;
else    if($k2==3)
	header('Location:quests3.php') ;
else    if($k2==4)
	header('Location:quests4.php') ;
else    if($k2==5)
	header('Location:quests5.php') ;
else    if($k2==6)
	header('Location:quests6.php') ;
else    if($k2==7)
	header('Location:quests7.php') ;
else    if($k2==8)
	header('Location:quests8.php') ;
else    if($k2==9)
	header('Location:quests9.php') ;
else    if($k2==10)
	header('Location:quests10.php') ;
else    if($k2==11)
	header('Location:quests11.php') ;
else    if($k2==12)
	header('Location:quests12.php') ;
else    if($k2==13)
	header('Location:quests13.php') ;
else    if($k2==14)
	header('Location:quests14.php') ;
else    if($k2==15)
	header('Location:quests15.php') ;
else    if($k2==16)
	header('Location:index.html') ;
 
         }
         }
  
}

   
?>