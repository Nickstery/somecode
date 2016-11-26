<?php



$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'add';
if(function_exists($action)) {
    call_user_func($action, rand(1,100));
}

function addRow($data) {
    die('i will add '.$data);
}

function delRow($data) {
    die('i will del '.$data);
}

function updateRow($data) {
    die('i will upd '.$data);
}
