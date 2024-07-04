<?php include ('functions.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style6.css">
</head>

<body>
    
        <form method="post" action="register.php" class="form">
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our app. </p>

            <?php echo display_error(); ?>

            <div>
                <label>Username
                    <input class="input" placeholder="" required="" type="text" name="username"
                        value="<?php echo $username; ?>">
                </label>
            </div>
            <div class="input-group">
                <label>Email
                    <input class="input" placeholder="" required="" type="email" name="email"
                        value="<?php echo $email; ?>">
                </label>
            </div>
            <div class="input-group">
                <label>password
                    <input class="input" placeholder="" required="" type="password" name="password_1">
                </label>
            </div>
            <div class="input-group">
                <label>Confirm password
                    <input class="input" type="password" name="password_2">
                </label>
            </div>
            <div class="input-group">
                <button type="submit" class="submit" name="register_btn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">LOG-IN</a>
            </p>
        </form>
</body>

</html>