<?php
    $servername = "server173.web-hosting.com";
$database = "appy79_m-matrix";
$user = "appy79_m-matrix";
$password = "205120041khushboo";
    // Create connection
    $conn = mysqli_connect($servername, $user, $password, $database);
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
        header("location: login.html");
        exit;
    }   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mind Matrix</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    
</head>

<body>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 py-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.html" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">MIND</span><span class="color_white">MATRIX</span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="quests6.php" class="p-3 text-decoration-none text-white bold">Challenges</a>
                        <a href="logout.php" class="p-3 text-decoration-none text-light bold">Logout</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-0 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  text-center">
                    <h1 class="display-1 bold color_white content__title">QUESTS<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">
                        Its time to show the world what you can do!
                    </p>
                </div>
            </div>
            <?php
            $username=$_SESSION['username'];
       $sql="select * from Registration where username='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_array($result);
            $k=$row['name'];
          $sql1="select * from leaderboard where name='$k'";
            $result1 = mysqli_query($conn, $sql1);
          if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_array($result1);
            $k1=$row1['score'];
            echo "<h5>Your Score : $k1</h5>";
          }
}
?>
<br>

            <div class="row hackerFont">
                <div class="col-md-12">
                   <br> <h4>Riddles</h4>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_web">
                        <div class="card-header" data-target="#problem_id_11" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                            Crack 101 <span class="badge">30 points</span>
                        </div>
                        <div id="problem_id_11" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                </div> -->
                                <p> I am a giant who is eating large chunk of data every second. If you wanna access me don't look out the sky, just pay me after a while. Who am I?</p>                             
                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                            <!--  <form action="ans.php" method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" name="ans" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p1" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                             </form> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_reversing">
                        <div class="card-header" data-target="#problem_id_12" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                            Crack 102 <span class="badge align-self-end">30 points</span>
                        </div>
                        <div id="problem_id_12" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                </div> -->
                                <p>Although I live in a shell, But I will look out for you if you call me! Who am I?</p>                          
                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                                <!-- <form action=ans.php method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" name="ans" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p2" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_pwning">
                        <div class="card-header" data-target="#problem_id_13" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_3">
                            Crack 103 <span class="badge align-self-end">30 points</span>
                        </div>
                        <div id="problem_id_13" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                </div> -->
                                <p> I slowly simmer down the CPU and GPU, what am I?</p>                          
                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                               <!--  <form action=ans.php method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p3" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_misc">
                        <div class="card-header" data-target="#problem_id_14" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_4">
                            Crack 104 <span class="badge align-self-end">30 points</span>
                        </div>
                        <div id="problem_id_14" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_4_chart"></canvas></div>
                                </div> -->
                                <p>You want an interaction with me, ask shell and kernel, they will help you out!!! Who am I?</p>                               
                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                                <!-- <form action=ans.php method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p4" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_steg">
                        <div class="card-header" data-target="#problem_id_15" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_5">
                            Crack 105 <span class="badge align-self-end">30 points</span>
                        </div>
                        <div id="problem_id_15" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_5_chart"></canvas></div>
                                </div> -->
                                <p>A sphere has three, a circle has two, and a point has zero. What is it?</p>                  
                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                               <!--  <form action=ans.php method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_5p" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------------------------------------- Picture decode ----------------------------------------------------->
            <br><br><br><br>
            <div class="row hackerFont">
                <div class="col-md-12">
                    <h4>Picture decode</h4>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_web">
                        <div class="card-header" data-target="#problem_id_21" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                            Decode 101 <span class="badge">50 points</span>
                        </div>
                        <div id="problem_id_21" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                </div> -->

                                <p> Can you identify which techinical term this picture depicts?</p>                             
                                <a target="_blank" href="Picture-decode/1.jpg" style="color:yellow;"><b>Follow me</b></a><br>

                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> <button type="submit" onclick="location.href = 'skip.php';" data-toggle="modal" class="btn btn-outline-secondary btn-shadow">Skip</button>
                              
                           
                                 <div class="modal fade" id="hint" tabindex="-1" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                       <?php
                                   $username=$_SESSION['username'];
   
                                    $sql="select * from Registration where username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 
   $row = mysqli_fetch_array($result);
    $k=$row['name'];
  $sql1="select * from leaderboard where name='$k'";
    $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_array($result1);
    $k1=$row1['count'];
    $k2=$row1['count1'];
    if($k1>=3)
    {      $sql2="select * from answer where id='$k2'";
    $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_array($result2);
      $k3=$row2['h1'];
      echo "Hint-1:$k3<br>";
        }
    }
        //next line
    if ($k1>=6){
      
    $sql2="select * from answer where id='$k2'";
    $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_array($result2);
      $k3=$row2['h2'];
      echo "Hint-2:$k3<br>";
        }
    }
     //next line
    if ($k1>=9){
      
    $sql2="select * from answer where id='$k2'";
    $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_array($result2);
      $k3=$row2['h3'];
      echo "Hint-3:$k3";
        }
    }
     }} ?>
                    </div>
                </div>
            </div>
             </div>

                                 <form action=ans.php method="post">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" name="ans" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p1" class="btn btn-outline-secondary" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_reversing">
                        <div class="card-header" data-target="#problem_id_22" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                            Decode 102 <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_22" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                </div> -->
                                <p>Decode 101 to unlock!</p>
                               <!--  <p> Can you ideantify which techinical term this picture depicts?</p>                             
                                <a target="_blank" href="Picture-decode/2.png" style="color:yellow;"><b>Follow me</b></a> -->

                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->
                                <!-- <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p2" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_pwning">
                        <div class="card-header" data-target="#problem_id_23" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_3">
                            Decode 103 <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_23" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you ideantify which techinical term this picture depicts?</p>
                                <a target="_blank" href="Picture-decode/3.png" style="color:yellow;"><b>Follow me</b></a> -->

                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->

                                <!-- <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p3" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_misc">
                        <div class="card-header" data-target="#problem_id_24" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_4">
                            Decode 104 <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_24" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_4_chart"></canvas></div>
                                </div> -->

                               <!--  <p> Can you ideantify which techinical term this picture depicts?</p>
                                <a target="_blank" href="Picture-decode/4.png" style="color:yellow;"><b>Follow me</b></a> -->

                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->

                                <!-- <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p4" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_steg">
                        <div class="card-header" data-target="#problem_id_25" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_5">
                            Decode 105 <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_25" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_5_chart"></canvas></div>
                                </div> -->

                               <!--  <p> Can you ideantify which techinical term this picture depicts?</p>
                                <a target="_blank" href="Picture-decode/5.png" style="color:yellow;"><b>Follow me</b></a> -->

                                <!-- <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a> -->

                                <!-- <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Answer" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_5p" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------------------------------------- WEB ----------------------------------------------------->
            <br><br><br><br>
            <div class="row hackerFont">
                <div class="col-md-12">
                    <h4>Web Exploits</h4>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_web">
                        <div class="card-header" data-target="#problem_id_31" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_1">
                            Gallery <span class="badge"></span>
                        </div>
                        <div id="problem_id_31" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_1_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you find the flag? </p>
                                <a target="_blank" href="https://mindmatrix-gallery.netlify.app/" style="color:yellow;"><b>Follow me</b></a>
                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p1" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->

                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_reversing">
                        <div class="card-header" data-target="#problem_id_32" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_2">
                            Decode Me <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_32" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_2_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you find the flag? </p>
                                <a href="decode.helloWorld" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2"></span>Download</a>
                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p2" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card category_pwning">
                        <div class="card-header" data-target="#problem_id_33" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_3">
                            Secure page <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_33" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_3_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you find the flag? </p>
                                <a target="_blank" href="https://mindmatrix-securepage.netlify.app/" style="color:yellow;"><b>Follow me</b></a>
                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p3" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_misc">
                        <div class="card-header" data-target="#problem_id_34" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_4">
                            Oh JS! <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_34" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_4_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you find the flag? </p>
                                <a target="_blank" href="https://mindmatrix-ohjs.netlify.app/" style="color:yellow;"><b>Follow me</b></a>
                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p4" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card category_steg">
                        <div class="card-header" data-target="#problem_id_35" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_5">
                            Source Me <span class="badge align-self-end"></span>
                        </div>
                        <div id="problem_id_35" class="collapse card-body">
                            <blockquote class="card-blockquote">
                                <!-- <div style="display: flex;">
                                    <h6 class="solvers">Solvers: <span class="solver_num">76</span> &nbsp;<span class="color_danger">Difficulty:</span></h6>
                                    <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_5_chart"></canvas></div>
                                </div> -->

                                <!-- <p> Can you find the flag? </p>
                                <a target="_blank" href="Source Me 1/Source-Me.html" style="color:yellow;"><b>Follow me</b></a>
                                <a href="#hint" data-toggle="modal" data-target="#hint" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_5p" class="btn btn-outline-secondary" type="button">Go!</button>
                                    </div>
                                </div> -->
                            </blockquote>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>

            <!-- <div class="row hackerFont justify-content-center mt-5">
                <div class="col-md-12">
                    Chart Difficulties:
                    <span style="color:#17b06b">Very Easy,</span>
                    <span style="color:#17b06b">Easy,</span>
                    <span style="color:#ffce56">Medium,</span>
                    <span style="color:#ef121b">Hard,</span>
                    <span style="color:#ef121b">Very Hard,</span>
                </div>
            </div>
        </div> -->
        
        <script>
            var dataset = [
                [41, 42, 43, 44, 45, 0], // keep the zero here
                [10, 9, 8, 7, 6, 0],
                [21, 16, 23, 1, 15, 0],
                [71, 12, 13, 17, 25, 0],
                [31, 5, 23, 24, 10, 0],
                [11, 2, 13, 41, 15, 0],
                [31, 5, 23, 24, 10, 0],
                [11, 2, 13, 41, 15, 0],
            ]

            function getBarChartData(i) {
                return barChartData = {
                    labels: ['Easy1', 'Easy2', 'Medium3', 'Hard4', 'Hard5'],
                    datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: [
                            '#17b06b', '#17b06b', '#ffce56', '#ef121b', '#ef121b'
                        ],
                        borderColor: [
                            '#17b06b', '#17b06b', '#ffce56', '#ef121b', '#ef121b'
                        ],
                        borderWidth: 1,
                        data: dataset[i - 1]
                    }]

                };
            }

            window.onload = function() {
                var numcharts = 8;
                for (let i = 1; i <= numcharts; i++) {
                    var ctx = document.getElementById('problem_id_' + i + '_chart').getContext('2d');
                    window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: getBarChartData(i),
                        options: {
                            tooltips: {
                                enabled: false,
                            },
                            responsive: false,
                            legend: {
                                display: false,
                            },
                            scales: {
                                yAxes: [{
                                    display: false
                                }],
                                xAxes: [{
                                    display: false
                                }]
                            }
                        }
                    });
                    myBar.canvas.parentNode.style.width = '80px';
                    myBar.canvas.parentNode.style.height = '20px';
                }
            };
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
</html>