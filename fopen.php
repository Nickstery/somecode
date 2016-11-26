<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
const FILE = 'fopen_storage/index.txt';

$file = fopen(FILE, 'a');

$data[] = [
    'name' => 'user '.rand(1,234123),
    'position' => 'Developer at level '.rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,234123),
    'position' => 'Developer at level '.rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,234123),
    'position' => 'Developer at level '.rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,234123),
    'position' => 'Developer at level '.rand(0,80)
];

$jsonData = json_encode($data);

fwrite($file, $jsonData);
fclose($file);