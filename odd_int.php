<?php

/*
Given an array, find the int that appears an odd number of times.

There will always be only one integer that appears an odd number of times.
*/

function findIt($seq)
{    
   $seq_value_count = array_count_values($seq);
    foreach ($seq_value_count as $key => $value) {
      if($value % 2 == 1) return $key;
    }
}

findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);