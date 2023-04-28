<?php
function generateHashtag(string $str) 
{
    $result = str_replace( ' ', '', ucwords( $str ) );
    if( empty( $result ) || strlen( $result ) >= 140 ) return false;
    return '#' . $result;
}

$arg = ' Hello there thanks for trying my Kata';
var_dump(generateHashtag( $arg ));