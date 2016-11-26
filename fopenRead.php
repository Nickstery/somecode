<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
const FILE = 'fopen_storage/index.txt';

$file = fopen(FILE, 'r');
$data = fread($file, filesize(FILE));
fclose($file);


print_r(json_decode($data, true));
die();