<?php
include ('../functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
                initial-scale=1.0">
    <title>CODECRAFT ACADEMY</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div>

        <!-- notification message -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- for header part -->
        <header>

            <div class="logosec">
                <div class="logo">CODECRAFT ACADEMY</div>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                    class="icn menuicn" id="menuicn" alt="menu-icon">
            </div>


        </header>

        <div class="main-container">
            <div class="navcontainer">
                <nav class="nav">
                    <div class="nav-upper-options">
                        <div class="nav-option option1">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                                class="nav-img" alt="dashboard">
                            <?php if (isset($_SESSION['user'])): ?>

                                <div class="content">
                                    <h2><?php echo $_SESSION['user']['username']; ?>
                                        <i style="color: #888;"> <br>
                                            (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

                                    </h2>
                                </div>


                            <?php endif ?>

                        </div>

                        <div class="option2 nav-option">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                                class="nav-img" alt="articles">
                            <h3><a href="../../Tutorial/tutorial.html">Tutorials</a></h3>
                        </div>

                        <div class="nav-option logout">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                                class="nav-img" alt="logout">
                            <div>
                                <?php if (isset($_SESSION['user'])): ?>
                                    <a href="home.php?logout='1'" style="color: black;"><h3>Log-Out</h3></a>

                                <?php endif ?>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
            <div class="main">
                <div class="box-container">

                    <div class="box box1">
                        <div class="text">
                            <div>
                                <?php if (isset($_SESSION['user'])): ?>
                                    &nbsp; <a href="create_user.php">
                                        <div class="text">
                                            <h2 class="topic-heading">+ Create User</h2>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="box box2">
                        <div class="text">
                            <div>
                                <?php if (isset($_SESSION['user'])): ?>
                                    &nbsp; <a href="create_user.php">
                                        <div class="text">
                                            <h2 class="topic-heading">+ Create Admin</h2>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="report-container">
                    <div class="report-header">
                        <h1 class="recent-Articles">Recent Added tuorials & Quizs</h1>
                        <a href=""><button class="view">View All</button></a>
                    </div>

                    <div class="report-body">
                        <div class="report-topic-heading">
                            <h3 class="t-op">Type</h3>
                            <h3 class="t-op">laguage</h3>
                            <h3 class="t-op">topic</h3>
                            <h3 class="t-op">status</h3>
                        </div>

                        <div class="items">
                            <div class="item1">
                                <h3 class="t-op-nextlvl">tutorial</h3>
                                <h3 class="t-op-nextlvl">C</h3>
                                <h3 class="t-op-nextlvl">C tutorial variablse</h3>
                                <h3 class="t-op-nextlvl label-tag"><a href="../../Tutorial/tutorial sub/C tutorial variablse.html">Published</a></h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">tutorial</h3>
                                <h3 class="t-op-nextlvl">C</h3>
                                <h3 class="t-op-nextlvl">C tutorial syntax</h3>
                                <h3 class="t-op-nextlvl label-tag"><a href="../../Tutorial/tutorial sub/C tutorial syntax.html">Published</a></h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Quiz</h3>
                                <h3 class="t-op-nextlvl">C</h3>
                                <h3 class="t-op-nextlvl">C INTRO QUIZ</h3>
                                <h3 class="t-op-nextlvl label-tag"><a href="../../Tutorial/tutorial sub/C QUIZS/c intro quiz/C INTRO QUIZ.html">Unpublished</a></h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Quiz</h3>
                                <h3 class="t-op-nextlvl">C</h3>
                                <h3 class="t-op-nextlvl">C synatax Quiz</h3>
                                <h3 class="t-op-nextlvl label-tag"><a href="../../Tutorial/tutorial sub/C QUIZS/C synatax/C synatax Quiz.html">Unpublished</a></h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl label-tag">Unpublished</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl label-tag">unpublished</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl label-tag">unpublished</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl label-tag">unpublished</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl"></h3>
                                <h3 class="t-op-nextlvl label-tag">unpublished</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>let menuicn = document.querySelector(".menuicn");
        let nav = document.querySelector(".navcontainer");

        menuicn.addEventListener("click", () => {
            nav.classList.toggle("navclose");
        })
    </script>
</body>

</html>