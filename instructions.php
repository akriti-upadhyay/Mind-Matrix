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
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="imgloaded">
    
    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
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
                        <a href="hackerboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">INSTRUC</span>TIONS<span class="vim-caret">&nbsp</span></h1>
                    <p class="text-grey text-spacey text-center hackerFont lead">
                        Now that you are a part of our community, you must know of some rules we follow around here.
                    </p>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <h5 class="bold color_white pt-3">
                            General Rules and Instructions</h5>
                            <ul>
                                <li>After a successful registration, you will be redirected to login page.</li>
                                <li>Each category has some points depending upon the difficulty level.</li>
                                <li>There are three hints available for each question, and after every three submissions you'll be able to access the hint which will deduct 10% of the points till 9th submission.</li>
                                <li>You have to solve the questions in the given order. You can either submit the correct answer, or just skip the quest if you feel stuck.</li>
                                <li>Remember, once you move on the next quest, you cannot go back to the previous quests.</li>
                                <li>DO NOT click on the skip button more than once for a single quest, otherwise more than one quest will be skipped.</li>
                                <li>Ranks can be viewed on the hackerboard. The hackerboard is updated every time a submission is made.</li>
                                <li>Judgement will be based on the final standings on the hackerboard.</li>
                                <li>Since the event will be live for two days, you can login/logout anytime you want, you’ll resume where you left off.</li>
                               </ul>
                            <h5 class="bold color_white pt-3">Submission Instructions</h5> 
                            <ul>
                                <li>Submit the answers for the first two categories in ALL CAPS with space in between (e.g., THIS IS AN ANSWER)</li>
                                <li>Flags found are of the format inctfj{submit_only_this_part}, enter the part inside the curly braces. Make sure you submit it in the format specified.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">Special Rules and Instructions</h5>
                            <ul>
                                <li>Don’t spoil! Don’t share how you solved each challenge with other participants.</li>
                                <li>Most importantly, HAVE FUN!!!</li>
                            </ul>
                            <h5 class="bold color_white pt-3">For Queries, Contact:</h5>
                            <ul>
                                <li>Akriti Upadhyay (07) - 9971933048</li>
                                <li>Khushboo Khanchandani (41) - 7340588054</li>
                            </ul>
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='login.html'})();">
                                        <h4>LET THE HACKING BEGIN!</h4>
                                    </button>
                                    <small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you to comply by the rules. Failure to do so might result in disqualification.</small>
                                </div>
                            </div>
                        </div>
                    </div>
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