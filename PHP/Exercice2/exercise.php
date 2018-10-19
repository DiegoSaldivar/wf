<?php
$password;
$salt;
#echo ceil(strlen($password) / 2);
/* $pos = floor(strlen($password) / 2);
$firstPart = substr($password, 0, $pos);
$lastPart = substr($password, $pos, strlen($password) - 1);
$saltedPassword = $firstPart . $salt . $lastPart;
 */

$firstPart = substr(
    $password,
    0,
    floor(strlen($password) / 2) + (strlen($password) % 2)
);

$lastPart = substr($password, ceil(strlen($password) / 2));
$saltedPassword = $firstPart . $salt . $lastPart;
