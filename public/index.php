<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require '../vendor/autoload.php';

echo SayHello::world();
echo '<br>';
$talk = new Hello();
echo $talk->talk();
