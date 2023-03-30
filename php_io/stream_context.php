<?php

# Creating a context:

$post_data = http_build_query([
    'var1' => 'Some content',
    'var2' => 'learning php'
]);

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-type: application/x-www-form-urlencoded",
        'content' => $post_data
    ]
]);

echo file_get_contents(filename: 'http://httpbin.org/post', context: $context);