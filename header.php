<?php

header('Application: Belajar PHP Web');
header('Author: Eko Kurniawan');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
