<?php

    function diff_date(){
       $date1 = '2021-12-01';
       $date2 = '2019-10-28';

       $diff = abs(strtotime($date2)-strtotime($date1));

       $years = floor($diff / (365*60*60*24));
       $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
       $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


       echo "Years ". $years. "<br>";
       echo "Month ". $months. "<br>";
       echo "Days ". $days;

    }


    echo diff_date();
?>