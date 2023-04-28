<?php
function generateHashtag(string $str) 
{
    $result = str_replace( ' ', '', ucwords( $str ) );
    if( empty( $result ) || strlen( $result ) >= 140 ) return false;
    return '#' . $result;
}

$arg = str_repeat("a", 139);
var_dump(generateHashtag( $arg ));