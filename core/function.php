<?php

function addRow()
{
    if(!isset($_POST['name']) || !isset($_POST['age'])) {
        die("ONE OR BOTH OF PARAMS MISSED");
    }

    $data = getRows();
    $data[] = [
        'name' => $_POST['name'],
        'age' => $_POST['age']
    ];

    $json = json_encode($data);

    file_put_contents(PATH_FILE, $json);

    header("Location: http://localhost:63342/test_lesson/api.php");
}

function getRows() {

    if(!file_exists(PATH_FILE)) {
        return [];
    }
    return json_decode(file_get_contents(PATH_FILE), true);
}