<?php
$say = $_GET['name'] ?? null;

if(isset($say)) {
	$say = "Hello " . htmlspecialchars($_GET['name']);
} else {
	echo "Butuh parameter 'name'";
}
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
