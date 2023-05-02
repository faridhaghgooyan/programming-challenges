<?php
function periodIsLate($last, $today, $cycleLength) : bool
{
    return $last->diff($today)->days > $cycleLength;
}

$function = "periodIsLate";

// Test
var_dump( $function( new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28 ) );