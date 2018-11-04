<?php

require '../../../vendor/autoload.php';
header('Content-Type: image/png');
use App\SuperImages;




SuperImages::init('GD'); // ImageMagick

echo SuperImages::open(__DIR__ . './img/2.jpg')
    ->resize(null, 300)
    ->flip('vertical')
    ->output('png');
