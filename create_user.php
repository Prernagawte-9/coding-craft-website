<?php include ('../functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL - Create user</title>
    <link rel="stylesheet" type="text/css" href="../style6.css">
    <style>
        .header {
            background: #003366;
        }

        button[name=register_btn] {
            background: #003366;
        }
    </style>
</head>

<body>
    <div class="header">
    </div>

    <form class="form" method="post" action="create_user.php">

    <p class="title">Admin - create user</p>

        <?php echo display_error(); ?>

        <div class="input-group">
            <label>Username
            <input class="input" type="text" name="username" value="<?php echo $username; ?>">
            </label>
        </div>
        <div class="input-group">
            <label>Email
            <input class="input" type="email" name="email" value="<?php echo $email; ?>">
            </label>
        </div>
        <div class="input-group">
            <label>User type
            <select class="input" name="user_type" id="user_type">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            </label>
        </div>
        <div class="input-group">
            <label>Password
            <input class="input" type="password" name="password_1">
            </label>
        </div>
        <div class="input-group">
            <label>Confirm password
            <input class="input" type="password" name="password_2">
            </label>
        </div>
        <div class="input-group">
            <button type="submit" class="submit" name="register_btn"> + Create user</button>
        </div>
    </form>
</body>

</html>