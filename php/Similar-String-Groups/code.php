<?php
// Lettcode challenges
class Solution {

    /**
     * @param String[] $strs
     * @return Integer
     */
    function numSimilarGroups($strs) {
        $base = str_split($strs[0]);
        sort($base);
        $count = 0;
        foreach($strs as $str){
           $explode = str_split($str);
            sort($explode);
            array_diff($base, $explode) == []  ? $count++ : '';
        }
        return $count;
    }
}

$class = new Solution();
$function = "numSimilarGroups";

$arg = ["tars","rats","arts","star"];

var_dump( $class->$function( $arg ));