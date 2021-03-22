<?php

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
