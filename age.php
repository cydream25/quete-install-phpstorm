<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 31/08/17
 * Time: 16:11
 */
$somme=0;

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19,
];

foreach ($students as $name=>$age) {
    echo "$name a $age ans\n";
    $somme +=$age;
}

echo "moyenne d'age : ".$somme/count($students)."\n";

//ajout