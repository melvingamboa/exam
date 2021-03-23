<?php
    function display_fibo(){
        $num1 = 0;
            $num2 = 1;

            echo $num1;
            for ($i=0; $i < 9; $i++) { 
                echo ' '.$num2.' ';
                $sum = $num1 + $num2;
                $num1 = $num2;
                $num2 = $sum;
    }
}
return display_fibo();
