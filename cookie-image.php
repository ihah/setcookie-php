<?php

// print_r($_COOKIE);
// die();
if (isset($_COOKIE['my-cookie'])) {
    $image = file_get_contents('./cookie.png');
    header('Content-type: image/jpeg;');
    header("Content-Length: " . strlen($image));
    echo $image;
} else {
    echo 'Forbidden (no cookie)';
}
