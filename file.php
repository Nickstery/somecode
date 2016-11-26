<?php

$arr = [
    [
        'Viktor',
        91,
        false
    ],
    [
        'Viktor',
        91,
        false
    ],
    [
        'Viktor',
        91,
        false
    ],
    [
        'Viktor',
        91,
        false
    ],
    [
        'Viktor',
        91,
        false
    ]
];

$arr2 = [
    [
        'name' => 'Viktor',
        'age' => 91,
        'bool' => false
    ],
    [
        'name' => 'Ole',
        'age' => 8,
        'bool' => false
    ],
    [
        'name' => 'Avle',
        'age' => 12,
        'bool' => false
    ]
];

$json_Data = json_encode($arr);
file_put_contents('serialize', $json_Data);
