<?php
function getTime(): string {
    $arr = explode(':', date('H:i'));
    if ($arr[0][1] == 1 or $arr[0] == 21) {
        $p1 = 'час';
    }
    else if ($arr[0][1] < 5 && $arr[0][0] != 1 && $arr[0][0] != 0) {
        $p1 = 'часа';
    }
    else {
        $p1 = 'часов';
    }

    if ($arr[1][1] == 1 && $arr[1][0] != 1) {
        $p2 = 'минута';
    }
    else if ($arr[1][1] < 5 && $arr[1][0] != 1) {
        $p2 = 'минуты';
    }
    else {
        $p2 = 'минут';
    }
    return $arr[0]. ' '. $p1. ' '. $arr[1]. ' '. $p2;
}
echo getTime();