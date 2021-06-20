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
    $ans=$_POST['ans'];
   $sql="select * from Registration where username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  
   $row = mysqli_fetch_array($result);
    $k=$row['name'];
  $sql1="select * from leaderboard where name='$k'";
    $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_array($result1);
    $k10=$row1['count'];
    $k1=$row1['count1'];
    {
         $sql2="select * from answer where id='$k1'";
    $result2 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_array($result2);
  
        $k2=$row2['ans'];
            
   if($k2==$ans)
         {   if($k1>=1 && $k1<=5)
            {   if ($k10<3)
                {
                    $sql = "UPDATE leaderboard SET score =score+30.00 WHERE name='$k'";
                }
                else if($k10>=3 && $k10<6)
                {
                    $sql = "UPDATE leaderboard SET score =score+27.00 WHERE name='$k'";
                }
                else if($k10>=6 && $k10<9)
                {
                    $sql = "UPDATE leaderboard SET score =score+24.30 WHERE name='$k'";
                }
                else 
                {
                    $sql = "UPDATE leaderboard SET score =score+21.87 WHERE name='$k'";
                }
            }
            else if($k1>=6 && $k1<=10)
            {
                if ($k10<3)
                {
                    $sql = "UPDATE leaderboard SET score =score+50.00 WHERE name='$k'";
                }
                else if($k10>=3 && $k10<6)
                {
                    $sql = "UPDATE leaderboard SET score =score+45.00 WHERE name='$k'";
                }
                else if($k10>=6 && $k10<9)
                {
                    $sql = "UPDATE leaderboard SET score =score+40.50 WHERE name='$k'";
                }
                else 
                {
                    $sql = "UPDATE leaderboard SET score =score+36.45 WHERE name='$k'";
                }
                
            }
            else if($k1>=11 && $k1<=15)
             {
                 if ($k10<3)
                {
                    $sql = "UPDATE leaderboard SET score =score+80.00 WHERE name='$k'";
                }
                else if($k10>=3 && $k10<6)
                {
                    $sql = "UPDATE leaderboard SET score =score+72.00 WHERE name='$k'";
                }
                else if($k10>=6 && $k10<9)
                {
                    $sql = "UPDATE leaderboard SET score =score+64.80 WHERE name='$k'";
                }
                else 
                {
                    $sql = "UPDATE leaderboard SET score =score+58.32 WHERE name='$k'";
                }
             }
$result = mysqli_query($conn,$sql);
 $sql1 = "UPDATE leaderboard SET count = 0 WHERE name='$k'";
$result1 = mysqli_query($conn,$sql1);
 $sql2 = "UPDATE leaderboard SET count1=count1+1 WHERE name='$k'";
$result2 = mysqli_query($conn,$sql2);
 $sql3="select * from leaderboard where name='$k'";
    $result3 = mysqli_query($conn, $sql3);
  if (mysqli_num_rows($result3) > 0) {
    $row3 = mysqli_fetch_array($result3);
    $k2=$row3['count1'];
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
         else
         {
             $sql2 = "UPDATE leaderboard SET count=count+1 WHERE name='$k'";
$result2 = mysqli_query($conn,$sql2);
 
 $sql3="select * from leaderboard where name='$k'";
    $result3 = mysqli_query($conn, $sql3);
  if (mysqli_num_rows($result3) > 0) {
    $row3 = mysqli_fetch_array($result3);
    $k2=$row3['count1'];
    if($k1==1)
	header('Location:quests.php') ;
   
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
    }}
  
  }
    }}
}
   
   
   
?>