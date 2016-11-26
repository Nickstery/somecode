<?php
require_once('view/views.php');
require_once('utils/constants.php');
require_once('core/function.php');
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'main';

switch($action) {
    case "main":
        getMainView();
        break;
    case 'add':
        addRow();
        break;
    case 'list':
        print_r(getRows());
        break;
    default:
        die('Unknown Operations');
        break;
}