<?php

$user = new User;

$user->sendRequest('add', [1,6]);

$response = $user->getResponse();

print_r($response);


?>

