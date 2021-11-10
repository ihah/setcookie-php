<?php


$image = file_get_contents('./cookie.png');
header('Content-type: image/jpeg;');
header("Content-Length: " . strlen($image));
echo $image;
