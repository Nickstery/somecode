<?php

require_once('utils/constants.php');


function getFilesInDirectory($dir)
{
    $contents = scandir($dir);

    foreach ($contents as $index => $path) {
        if ($path === '.' || $path === '..') {
            unset($contents[$index]);
        }
    }

    return $contents;
}

