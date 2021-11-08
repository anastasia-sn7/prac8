<?php

$user = file_get_contents('database/user.csv');

$users[] = [
    'name' => $user[0],
    'email' => $user[1],
    'gender' => $user[2]
];

for($i = 0; $i < count($users); $i++){
    echo $user[$i]."<br />";
}

