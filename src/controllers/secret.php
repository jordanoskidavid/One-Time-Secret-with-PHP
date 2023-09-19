<?php
require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();

$GetID = $_GET['id'];

$query = "SELECT body FROM message WHERE uuid='" . $GetID . "'";
$secret_msg = $db->query1($query);

foreach ($secret_msg as $msg) {
    $take = htmlspecialchars($msg['body']);
}


$secret_msg = $take;

if (empty($secret_msg)) {
    $functions->abort();
} else {

    $ciphering_algorithm = "AES-128-CTR";
    $passphrase = "davidlearns16";

    $IdGet = $_GET['id'];


    $secret_msg = openssl_decrypt($take, $ciphering_algorithm, $passphrase);
    $query2 = "DELETE FROM message WHERE uuid='" . $IdGet . "'";
    $db->query1($query2);

    require_once BASE_PATH . ('views/secret.view.php');

}


