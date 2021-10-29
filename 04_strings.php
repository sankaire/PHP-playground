<?php

// Create simple string

$name = 'peter';
echo "My name is $name  I am 21 yrs <br>";

// String concatenation
echo "hello  $name <br>";
echo 'hello'.'Tepela'. 'from here'.'<br>';
// String functions
$string = '  hello world   ';

echo "1 -". strlen($string). '<br>';
echo "2 -". trim($string). '<br>';
echo "3 -". ltrim($string). '<br>';
echo "4 -". rtrim($string). '<br>';
echo "5 -". str_word_count($string). '<br>';
echo "6 -". strrev($string). '<br>';
echo "7 -". strtoupper($string). '<br>';
echo "8 -". strtolower($string). '<br>';
echo "9 -". ucfirst('hello'). '<br>';
echo "10 -". lcfirst('Hello'). '<br>';
echo "11 -". ucwords('Hello World'). '<br>';
echo "12 -". strpos($string, "....."). '<br>';
echo "13 -". substr($string, 8). '<br>';
echo "14 -". str_replace('World', 'PHP', $string). '<br>';
echo "15 -". str_ireplace('worls', 'PHP', $string). '<br>';

// Multiline text and line breaks

$longtext = "
                Hello My name is ,<b>Tepela</b>
                I am <b>21</b>, I Love to Code

            ";
echo $longtext. '<br>';

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php