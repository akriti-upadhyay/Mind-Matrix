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
    // $ans=$_POST['ans'];
   $sql="select * from Registration where username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  
   $row = mysqli_fetch_array($result);
    $k=$row['name'];
  $sql1="select * from leaderboard where name='$k'";
    $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_array($result1);
    $k2=$row1['count1'];
    if($k2==1)
  header('Location:quests.php') ;
   else if($k2==2)
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
}
}
?>
 