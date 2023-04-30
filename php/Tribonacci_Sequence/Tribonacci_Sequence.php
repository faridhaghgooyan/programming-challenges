<?php
function tribonacci(array $signature, int $n) : array
{
    for($i=0; $i < $n; $i++){
        $signature[] = array_sum( array_slice( $signature , $i , 3 ) );
    }
    return array_slice($signature , 0 , $n);
}

var_dump(tribonacci( [200,200,200],1 ));