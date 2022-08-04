<?php
if(isset($_GET['first_name']) && isset($_GET['last_name'])) {
	$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];
} else {
	echo "Butuh Parameter 'first_name' dan 'last_name'";
}
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
