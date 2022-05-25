<?php

$array = [

    'SKLAD1' => [
 
        'EDA' => [
 
            'TOVAR1' => [
 
                'NAME' => '....',
 
                'PRICE' => 1
 
            ],
 
            'TOVAR2' => [
 
                'NAME' => '....',
 
                'PRICE' => 12
 
            ], 
        ],
 
        'NAPITKI' => [
 
            'TOVAR55' => [
 
                'NAME' => '....',
 
                'PRICE' => 4
 
            ],
 
            'TOVAR54' => [
 
                'NAME' => '....',
 
                'PRICE' => 190
 
            ],
        ],
    ],
 
    'SKLAD2' => [
 
        'EDA' => [
 
            'TOVAR66' => [
 
                'NAME' => '....',
 
                'PRICE' => 9
 
            ],
 
            'TOVAR67' => [
 
                'NAME' => '....',
 
                'PRICE' => 7
 
            ],
        ],
 
        'NAPITKI' => [
 
            'TOVAR77' => [
 
                'NAME' => '....',
 
                'PRICE' => 200
 
            ],
 
            'TOVAR78' => [
 
                'NAME' => '....',
 
                'PRICE' => 0
 
            ],
        ],
    ],
 ];

var_dump(array_sort($array, 'PRICE', SORT_DESC));


 function array_sort($array, $on, $order=SORT_ASC)
 {
     $new_array = array();
     $sortable_array = array();
 
        foreach ($array as $k => $v) {
            $sclad_array[$k] = $v;
            foreach ($v as $k2 => $v2) {
                $food_array[$k2] = $v2;
                foreach ($v2 as $k3 => $v3) {
                    $tovar_array[$k3] = $v3;
                    foreach ($v3 as $k4 => $v4) {
                        if ($k4 == $on) {
                                $sortable_array[$k3] = $v4;
                        }
                    }
                }
            }
        }
 
         switch ($order) {
             case SORT_ASC:
                 asort($sortable_array);
             break;
             case SORT_DESC:
                 arsort($sortable_array);
             break;
         }
 

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $tovar_array[$k];
        }

    return $new_array;
 }



 
