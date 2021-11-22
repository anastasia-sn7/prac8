<?php

$servername = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$database = "newsite";//повинна бути створена в субд
=======
$database = "testdb"; //повинна бути створена в субд
>>>>>>> origin/master

// Встановлення з'єднання
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
