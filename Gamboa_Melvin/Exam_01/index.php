<?php

function ispalindrome(){
    $word = "madam";
    $reverse = strrev($word);

    if(strtolower($reverse) == strtolower($word)){
        echo "The word ". $word. " is palindrome";
    }else{
        echo "The word ". $word. " is not palindrome";
    }    
}

 echo ispalindrome();

?>