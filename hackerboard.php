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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="imgloaded">
    <div class="glitch">
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
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
                         <a href="index.html" class="p-3 text-decoration-none text-light bold">Home</a>
                            <a href="about.html" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="instructions.php" class="p-3 text-decoration-none text-light bold">Instructions</a>
                            <a href="login.html" class="p-3 text-decoration-none text-light bold">Login</a>
                            <a href="register.html" class="p-3 text-decoration-none text-light bold">Register</a>
                            <a href="hackerboard.php" class="p-3 text-decoration-none text-white bold">Hackerboard</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">HACKER</span>BOARD<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey lead text-spacey text-center hackerFont">
                        Where the world get's ranked!
                    </p>
                </div>
            </div>
            <div class="row mt-5  justify-content-center">
                <div class="col-xl-10">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark hackerFont">
                            <tr>
                                <th>Position</th>
                                <th>Name</th>
                                <th>Roll Number</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $servername = "server173.web-hosting.com";
$database = "appy79_m-matrix";
$user = "appy79_m-matrix";
$password = "205120041khushboo";
                                        
                                // Create connection
                                $conn = mysqli_connect($servername, $user, $password, $database);
                                $result = mysqli_query($conn, "SELECT name,rollno,score FROM leaderboard ORDER BY score DESC");                               
                                $ranking = 1;
                            
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>
                                              <td>{$ranking}</td>
                                              <td>{$row['name']}</td>
                                              <td>{$row['rollno']}</td>
                                              <td>{$row['score']}</td>
                                              </tr>";
                                        $ranking++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>