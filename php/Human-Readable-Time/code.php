<?php
function human_readable(int $seconds) : string
{
    return $seconds >= 0 ? sprintf(
            "%02d:%02d:%02d", 
            floor($seconds / 3600), // to hours
            floor(($seconds % 3600) / 60), // to minutes
            $seconds % 60 // seconds
        ) : 'Seconds integer is negative!';
}

$arg = -359999;
var_dump(human_readable( $arg ));