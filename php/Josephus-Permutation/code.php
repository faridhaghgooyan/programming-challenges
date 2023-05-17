<?php
function josephus(array $items, int $k) : array {
    $survivors = [];
    $n = count($items);
    $index = 0;
    while ($n > 0) {
        // Calculate the new index
        $index = ($index + $k - 1) % $n;
        // Add the item
        $survivors[] = $items[$index];
        // Remove the item
        array_splice($items, $index, 1);
        $n--;
    }
    return $survivors;
}

$function = "josephus";

// Test
var_dump( $function( [1, 2, 3, 4, 5, 6, 7], 3 ) );
