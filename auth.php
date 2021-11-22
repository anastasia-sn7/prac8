<?php
session_start();
$isRestricted = false;
if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}?>
<<<<<<< HEAD

=======
>>>>>>> origin/master
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

=======
>>>>>>> origin/master
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
<<<<<<< HEAD
    <form action="handler1.php" method="post" enctype="multipart/form-data">
=======
    <form action="authHandler.php" method="post" enctype="multipart/form-data">
>>>>>>> origin/master
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
<<<<<<< HEAD
=======
        <?php if($isRestricted) {
            echo "You are already logged in! Do you want to <a href='login.php'> add user?</a>";
            echo "<br>";
        }?>
>>>>>>> origin/master
        <input type="submit" class="btn" value="Login">
    </form>
</div>

</body>
</html>