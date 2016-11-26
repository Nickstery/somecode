<?php

require_once('utils/constants.php');

if(file_exists(PATH_FILE)) {
    rename(PATH_FILE, DUMP_FILE);
}