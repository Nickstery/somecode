<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


const DIR = 'storage';
const DUMP_DIR = 'dump';
const PATH_FILE = DIR."/index.txt";
const DUMP_FILE = DUMP_DIR."/dump.txt";


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

function removeDir($directoryToDelete) {
    $fileList = getFilesInDirectory($directoryToDelete);
    foreach($fileList as $fileName) {
        if(is_dir($directoryToDelete."/".$fileName)) {
            removeDir($directoryToDelete."/".$fileName);
            rmdir($directoryToDelete."/".$fileName);
        } else {
            unlink($directoryToDelete . "/" . $fileName);
        }
    }
}