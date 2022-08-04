<?php

header('Application: Belajar PHP Web');
header('Author: Eko Kurniawan');

$client = $_SERVER['HTTP_CLIENT_NAME'] ?? null;

echo "Hello $client";
