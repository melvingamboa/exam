<?php

    function display_odd(){
        $odd = '';
            $num=1;
            do {
                if($num %2 != 0)
                {
                    $odd = $odd. ' '.$num;
                }
                $num++;
            } while ($num <= 10);
            echo  $odd;
    }
return display_odd();