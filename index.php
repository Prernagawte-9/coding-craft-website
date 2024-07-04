<?php
include ('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CODECRAFT</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body class="bodytag">

    </div>
    <div class="content">
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
        <!-- logged in user information -->
        <div class="profile_info">



            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#" class="logo" class="list_a">
                                <img src="CODECRAFT ACADEMY.png">
                                <span class="nav-item" style="color: aqua;">user</span>
                            </a>
                        </li>
                        <li><a href="../index.html" class="list_a">
                                <i class="fas fa-home"></i>
                                <span class="nav-item">Home</span>
                            </a></li>
                        <div style="margin:10px;">
                            <div class="card">
                                <div class="card-img"> <img src="images/user.png" style="width: 190px; height: 254px;">
                                </div>

                                <div class="card-info">
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <strong><?php echo $_SESSION['user']['username']; ?> </strong>

                                        <small>
                                            <i
                                                style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                                            <br>
                                            <a href="index.php?logout='1'"><button class="cssbuttons-io-button"> log-out
                                                    <div class="icon">
                                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </div>
                                                </button></a>
                                        </small>

                                    <?php endif ?>
                                </div>
                            </div>
                            </li>
                    </ul>
                </nav>

                <section class="main">
                        <h1 class="h-class">Tutorials</h1>
                        <div class="course-box">

                            <div class="course">
                                <div class="box">
                                    <h3 class="h-class">HTML</h3>
                                    <button><a href="../Tutorial/HTML TUTORIAL/HTML INTRO.HTML"
                                            style="color: aqua;">continue</a></button>
                                    <i class="fab fa-html5 html"></i>
                                </div>
                                <div class="box">
                                    <h3 class="h-class">CSS</h3>
                                    <button><a href="../Tutorial/CSS TUTORIAL/CSS (1).HTML"
                                            style="color: aqua;">continue</a></button>
                                    <i class="fab fa-css3-alt css"></i>
                                </div>

                            </div>

                        </div>
                        <div class="course-box">

                            <div class="course">
                                <div class="box">
                                    <h3 class="h-class">JavaScript</h3>
                                    <button><a href="../Tutorial/JAVASCRIPT/JAVASCRIPT (1).HTML"
                                            style="color: aqua;">continue</a></button>
                                    <i class="fab fa-js-square js"></i>
                                </div>
                                <div class="box">
                                   <center><button><a href="../Tutorial\tutorial.html" style="color: aqua;">More</a></button></center> 
                                </div>
                            </div>

                        </div>
                    </section><br>
                    

                    </section>
            </div>

</body>

</html>