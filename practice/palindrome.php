<?php
class checkPalindrome
{

    public function reverseStr($string)
    {
        return ($string == strrev($string)) ? 1 : 0;
    }

}

$StringPalindrome = new checkPalindrome;

$string = 'madam';
($StringPalindrome->reverseStr($string) == 1) ? $msg = 'Palindrome' : $msg = 'Not a palindrome';

echo $msg;
