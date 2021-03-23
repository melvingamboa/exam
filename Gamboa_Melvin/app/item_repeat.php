<?php

function item_repeat() {

    $color_val = ['red','blue','black','red','blue','blue','red','gold'];
    $col_count = array_count_values($color_val);

    $unique_val = [];

    foreach($col_count as $k => $v){
        if($v === 1){
            $unique_val[] = $k;
        }
    }
     print_r($unique_val);
}

echo item_repeat();
