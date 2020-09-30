<?php

// Solution for "Cut the sticks" https://www.hackerrank.com/challenges/cut-the-sticks/problem
function cutTheSticks($arr) {

    $count = count($arr);
    $result[] = $count;
     
    $min = min($arr);
    $ar = array_count_values($arr);
    ksort($ar);

            foreach ($ar as $value){
            
                if(($count - $value)>0){
                
                    $count -= $value;
                    $result[] = $count;
                }
            }

    return $result;
}

