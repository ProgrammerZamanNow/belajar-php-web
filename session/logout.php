<?php
session_start();
session_destroy();

header('Location: /session/login.php');
exit();
