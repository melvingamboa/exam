<?php
    function sum_even() {
    
    $tot = 0;
    $num = 0;
    
    while ($num <= 10)
    {
        if ($num % 2 == 0)
        {
            $tot = $tot + $num;
        }
        $num++;
    }
    echo $num;
}

return sum_even();