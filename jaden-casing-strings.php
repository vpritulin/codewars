<?php
//Jaden Casing Strings

$string = 'How can mirrors be real if our eyes arent real';
function toJadenCase($string)
{
    return ucwords(strtolower($string));
}
echo toJadenCase($string);
