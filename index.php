<?php
require_once 'config.php';

//Get the repo name sent in the webhook


$response = [];
$cloneReturn = 0;

$t = exec("git-clone.sh", $response, $cloneReturn);
//$t = exec("ls -lah", $response, $cloneReturn);

foreach ($response as $line) {
    echo $line;
}

var_dump(time());
var_dump($response);
var_dump($cloneReturn);

phpinfo();