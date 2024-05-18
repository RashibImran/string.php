<?php

$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];


$evenNumbers=array_filter($randomNumbers,function($number){
        return $number % 2==0 && $number>50;
});

// print_r($evenNumbers);


$multiplyNumbers=array_map(function($number){
    return $number * 2 ;
},$evenNumbers);


print_r($multiplyNumbers);