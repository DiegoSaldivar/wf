<?php

$input;
$winner;
/*
declare brother A and brother B

for each row in the input
explode the row as brother A card and brother B cal_from_jd

if the brother A card is upper thant the brother B card add a point
to the brother A, else if the b rother B card is upper, give a point to brother B

Set the winner as greater brother value */

//declare brother A and brother B
$brotherA = 0;
$brotherB = 0;

//for each row in the input
foreach ($input as $play) {
    // explode the row as brother A card and brother B cal_from_jd
    //if the brother A card is upper thant the brother B card add a point to the brother A,
    list ($a, $b) = $play;
    if ($a > $b) {
        $brotherA++;
    } else if ($a < $b){
        //to the brother A, else if the b rother B card is upper, give a point to brother B
        $brotherB++;
    }
};

//Set the winner as greater brother value
$winner = $brotherA > $brotherB ? 'A' : 'B';
