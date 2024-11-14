<?php
require 'vendor/autoload.php';

use App\Point;
use App\Vector;

$T1 = new Point(3, 4);
$V1 = new Vector(4, 0);
$V2 = new Vector(0, 0);
$V3 = new Vector(0, 4);

echo "Length of V1: " . $V1->length() . "\n";
echo "Length of V2: " . $V2->length() . "\n";
echo "Length of V3: " . $V3->length() . "\n";

if ($V1->isPerpendicular($V3)) {
    echo "V1 and V3 are perpendicular\n";
}

$T1->moveX($V1->x);
$T1->moveY($V1->y);
echo "New coordinates of T1: ({$T1->x}, {$T1->y})\n";