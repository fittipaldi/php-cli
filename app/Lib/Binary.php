<?php

namespace Lib;

/**
 * Class Binary
 */
class Binary
{
    /**
     * Search binary
     *
     * @param array $items
     * @param integer $find
     *
     * @return mixed
     */
    public static function search(&$items, $find, $return_key = true)
    {
        //Order list ASC
        sort($items);
        //Mode low
        $low = 0;
        //Max element
        $high = count($items) - 1;
        //Start search
        while ($low <= $high) {
            //Key half
            $half = floor(($low + $high) / 2);
            if ($find == $items[$half]) {
                //Element half
                if ($return_key === true) {
                    return $half;
                }
                return $items[$half];
            } else {
                //Decrease the Half
                if ($find < $items[$half]) {
                    $high = $half - 1;
                } else {
                    $low = $half + 1;
                }
            }
        }
        return false; // Not found!
    }
}