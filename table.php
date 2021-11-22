<?php

if (file_exists('database/users.csv'))
    $user = file_get_contents('database/user.csv');

for ($i = 0; $i < count($user); $i += 4) {
    $users[($i)/3] = [
        'name' => $user[$i],
        'email' => $user[$i+1],
        'gender' => $user[$i+2],
        'filePath' => $user[$i+3]
    ];
}

for($i = 0; $i < count($user); $i++){
    echo $user[$i]."<br />";
    echo "<td>".$users[$i]['name']."</td>";
    echo "<td>".$users[$i]['email']."</td>";
    echo "<td>".$users[$i]['gender']."</td>";
    $img = pathinfo($users[$i]['filePath']);
    if ($users[$i]['filePath'] == "")
        $myFile['image'] = "image.jpg";
    echo "<td>"."<img src='"."assets/public/images//".$img['image']."' alt='' width='50' height='50'"."</td>";
}