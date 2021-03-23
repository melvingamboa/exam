<?php
    function most_occur(){
        $name_arr = ['Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'];
        sort($name_arr);

        $result      = array_count_values ($name_arr);
        $arr_length  = count($result);

        $most_occur = [];

        foreach($result as $key => $val){
            if($val == 3){
                $most_occur[] = $key;
            }
        }
       print_r($most_occur);
    }
return most_occur();