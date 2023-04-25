function find_even_index(array $arr) : int
{
    for( $i = 0 ; $i < count($arr) ; $i++ ){
        $left = array_sum(array_slice($arr, 0, $i));
        $right = array_sum(array_slice($arr, $i + 1));
        if($left == $right) return $i;
    }
    return '-1';
}
