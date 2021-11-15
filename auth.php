<?php
session_start();
$isRestricted = false;
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .container {
            width: 400px;
        }
    </style>

    <title>Login</title>
</head>
<body>

<div class="container">
    <h1>Login</h1>
    <form action="authHandler.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="field">
                <label>E-mail: <input type="email" name="email"><br></label>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>Password: <input type="password" name="password"><br></label>
            </div>
        </div>
        <?php if($isRestricted) {
            echo "You are already logged in! Do you want to <a href='login.php'> add user?</a>";
            echo "<br>";
        }?>
        <input type="submit" class="btn" value="Login">
    </form>
</div>

</body>
</html>