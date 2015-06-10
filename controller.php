<?php

require('gravity.php');
require('thrown.php');
require('bouncer.php');
$gravity = new Gravity(1, 49, 30);
$gravity = new Thrown(1, 25, 30, 20);
$gravity = new Bouncer(1, 49, 30, 0.9);
$time = 0;
while(true) {
    $position = $gravity->getPosition($time);
    for ($y = 49; $y >= 0; $y--) {
        echo '|';
        for ($x = 0; $x < 50; $x++) {
            if ($y == ceil($position['y']) && $x == ceil($position['x'])) {
                echo 'X';
            } else {
                echo ' ';
            }
        }
        echo '|
';
    }
    for ($b = 0; $b < 52; $b++) {
        echo '@';
    }
    echo '
';
    if ($position['y'] < 0) {
        break;
    }
    $time += 0.1;
    usleep(100000);
}
