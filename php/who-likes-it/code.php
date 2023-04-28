<?php
function likes( array $names ) : string
{
    switch ( count( $names ) ) {
        case 0:
            return 'no one likes this';
            break;
        case 1:
            return $names[0] . ' likes this';
            break;
        case 2:
            return $names[0] . ' and '.$names[1].' like this';
            break;
        case 3:
            return $names[0].', '.$names[1].' and '.$names[2].' like this';
            break;
        default:
            return $names[0]. ', '.$names[1].' and '.(count($names) - 2).' others like this';
    };
}

$arg = ["Alex", "Jacob", "Mark", "Max"];
var_dump(likes( $arg ));

// For PHP 8
/*

return match ( count( $names ) ) {
    0       => 'no one likes this',
    1       => $names[0] . ' likes this',
    2       => $names[0] . ' and '.$names[1].' like this',
    3       => $names[0].', '.$names[1].' and .'.$names[2].' like this',
    default => $names[0]. ', '.$names[1].' and '.(count($names) - 2).' others like this'
};

*/