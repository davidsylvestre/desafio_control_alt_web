<?php
// Item 1
namespace Das;

class Utils {
    static public function randonGen($min, $max, $lenght){
        $numbers = range($min, $max);
        shuffle($numbers);
        $numbers = array_slice($numbers, 0, $lenght);
        sort($numbers, SORT_NUMERIC);
        return $numbers;
    }
}
