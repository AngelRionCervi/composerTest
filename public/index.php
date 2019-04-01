<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 01/04/19
 * Time: 10:32
 */

require '../src/Wcs/Hello.php';
require '../vendor/autoload.php';

$hi = new App\Wcs\Hello();
$yo = new HelloWorld\SayHello();

echo $hi->hey()."\n";
echo $yo->world();