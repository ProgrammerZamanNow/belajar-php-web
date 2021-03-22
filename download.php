<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="profile.jpg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/profile.jpg');
    exit();
}else{
    echo "Invalid Key";
}