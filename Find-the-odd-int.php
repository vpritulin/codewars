<?php
function findIt (array $seq): ?int
{
    $hasArr = [];
    foreach ($seq as $value){
        if (array_key_exists($value, $hasArr)){
            $hasArr[$value]++;
        }else{
            $hasArr[$value]=1;
        }
    }
    foreach($hasArr as $key => $value){
        if( $value%2 == 1){
            return $key;
        }
    }
    return null;
}

print_r(findIt([1,2,2,3,3,3,4,3,3,3,2,2,1]));
