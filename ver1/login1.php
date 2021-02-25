<?php //include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="email">E-mail:</label>
            <input type="text" name="email" required>
        </div>
        <div>
            <label for="password_1">Password:</label>
            <input type="text" name="password_1" required>
        </div>
        <div>
            <button type="submit" name="login_user">Sign up</button>
            <button type="reset">Clear</button>
        </div>
        <div>
            Not a registerd user <a href="signup.php">Click here to Register</a>
        </div>
    </form>
</body>
</html>