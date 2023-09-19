<?php

require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();
$getID = $_GET['id'];
$query = "SELECT user_id, body, uuid FROM message WHERE uuid='" . $getID . "'";
$privatelink = $db->query1($query);

foreach ($privatelink as $link) {
    $takes = htmlspecialchars($link['uuid']);
}


$privatelink = $takes;

if (empty($privatelink)) {
    $functions->abort();
} else {


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['pressed'] == 1) {
            $get_id = $_GET['id'];
            $query2 = "DELETE FROM message WHERE uuid='" . $get_id . "'";
            $db->query1($query2);
            header('Location: /');
        }
    }

    require_once BASE_PATH . 'views/private.view.php';
}