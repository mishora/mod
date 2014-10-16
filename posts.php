<?php
$post = new Post;

$post->sendRequest('add', [6,6]);

$response = $post->getResponse();

print_r($response);

?>
