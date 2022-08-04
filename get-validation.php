<?php
// https://www.php.net/manual/en/function.empty
if(empty($_GET['name'])){
    http_response_code(400);
    echo "Name is Required";
    exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
