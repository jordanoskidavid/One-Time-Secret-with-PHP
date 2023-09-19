<?php

require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://numbersapi.com/random/math?fragment=true&json=true",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);
$response = curl_exec($curl);
$data = json_decode($response, true);
$number = $data['number'];
$trivia = $data['text'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pressed'] == 1) {
        $errors = [];
        $uuid = $functions->guidv4();
        $urlsecret = '?id=' . $uuid;
        $urlprivate = 'http://' . $_SERVER['HTTP_HOST'] . '/secret?id=' . $uuid;
        $ciphering_algorithm = "AES-128-CTR";

        $passphrase = "davidlearns16";

        if (!Validator::string($_POST['body'], 1, 255)) {
            $errors['body'] = 'You have 0 or more than 255 characters, please enter valid input .';
        }

        if (empty($errors)) {
            $db->query("INSERT INTO message(body,uuid) VALUES (:body,:uuid)", [
                'body' => openssl_encrypt($_POST['body'], $ciphering_algorithm, $passphrase),
                'uuid' => $uuid
            ]);
            header('Location: /private' . $urlsecret);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pressed'] == 2) {
        $uuid = $functions->guidv4();
        $length = rand(8, 50);
        $pwd = $functions->generate_password($length);
        $urlsecret = '?id=' . $uuid;
        $urlprivate = 'http://' . $_SERVER['HTTP_HOST'] . '/secret?id=' . $uuid;
        $ciphering_algorithm = "AES-128-CTR";
        $passphrase = "davidlearns16";
        $db->query("INSERT INTO message(body,uuid) VALUES (:body,:uuid)", [
            'body' => openssl_encrypt($pwd, $ciphering_algorithm, $passphrase),
            'uuid' => $uuid
        ]);
        header('Location: /private' . $urlsecret);
    }

}
require_once BASE_PATH . ('views/index.view.php');

