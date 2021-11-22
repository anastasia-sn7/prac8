<?php
require 'db.php';
require 'uploads.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
            .container {
                width: 400px;
            }
        </style>
    </head>
    <body style="padding-top: 3rem;">

    <div class="container">
        <?php
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["gender"])) {
            echo "<div class='redText'>Empty data</div>";
        }
        else {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            echo "<b>User Added!</b><br>";
            echo "Name: " . $_POST["name"] . "<br>";
            echo "Email: " . $_POST["email"] . "<br>";
            echo "Gender: " . $_POST["gender"] . "<br>";
            if (empty($filePath)) {
                $filePath = "assets/public/images/img.jpg";
                echo "Filename: " . $filePath . "<br>";
            } else echo "Filename: " . $filePath . "<br>";
            $password = 11111;
            $sql = "INSERT INTO users (email, name, gender, password, path_to_img)
            VALUES ('$email', '$name','$gender', '$password', '$filePath')";
            $res = mysqli_query($conn, $sql);
        }
        ?>
        <hr>
        <a class="btn" href="adduser.php">return back</a>
        <a class="btn" href="table.php">view list</a>
    </div>
    </body>
    </html>