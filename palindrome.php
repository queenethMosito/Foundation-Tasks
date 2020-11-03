<?php
class Palindrome {
    public static function isPalindrome($str) {
        
        //We are removing spaces from the string
        $string = str_replace(' ', '', $str);
        //make everything lower case
        $string = strtolower($string);
        
        //removing special charactors
        $string = preg_replace("/[^A-Za-z0-9]/","",$string);
        
        
        
        //reverse the string
        $reverse = strrev($string);
        
        if ($string == $reverse) {
           return true;
        }
        else {
            return false;
        }
    }
}

if (Palindrome::isPalindrome('Never Odd Or Even'))
{
    echo 'Palindrome';
}
else
{
    echo 'Not palindrome';
}
        
?>