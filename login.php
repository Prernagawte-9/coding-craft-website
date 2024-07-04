<?php include ('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body> <br><br><br><br>

    <div style=" margin: 500px ; margin-top: 50px ; ">
        <div class="card">
            <div class="card2">
                <form class="form" method="post" action="login.php">
                    <p id="heading">Login</p>
                    <?php echo display_error(); ?>
                    <div class="field">
                        <input type="text" class="input-field" placeholder="Username" autocomplete="off"
                            name="username" />
                    </div>
                    <div class="field">
                        <input type="password" class="input-field" placeholder="Password" name="password" />
                    </div>
                    <div class="btn">
                        <button type="submit" class="button1"name="login_btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        <br>
                        <button class="button1"><a href="register.php"> Sign Up </a></button><br>
                        <button class="button1"><a href=" ../index.html ">Home</a></button>
                    </div><br>
                </form>
            </div>
        </div>
    </div>


</body>

</html>