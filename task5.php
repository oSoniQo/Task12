<?php
function power($val, $pow) {
    if ($pow < 2) {
        return $val;
    }
    return power($val, $pow - 1) * $val ;
}
echo power(3,4);