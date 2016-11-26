<?php

require_once('utils/constants.php');

if(file_exists(PATH_FILE)) {

    $filename = array_pop(explode('/', PATH_FILE));
    print_r($filename);
    copy(PATH_FILE, DUMP_DIR."/".$filename);
}