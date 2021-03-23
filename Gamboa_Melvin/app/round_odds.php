<?php
    function round_odds(){
        $num_val = [9863,2020,7127,80,131,55,100];
        sort($num_val);
        
        $arr_length = count($num_val);
        for($x = 0; $x < $arr_length; $x++) {
            if($num_val[$x] %2 != 0){
                echo round($num_val[$x],-1);
            }if($num_val[$x] %2 == 0){
                echo $num_val[$x];
            }
            echo "<br>";
        }
    }
return round_odds();