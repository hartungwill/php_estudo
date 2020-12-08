<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];


$idadeList[count($idadeList)] = 20;
// é o mesmo que:
$idadeList[] = 20;


for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}