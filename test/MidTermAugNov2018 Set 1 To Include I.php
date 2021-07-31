<?php

function printAText()
{
$print = "<p>This is a print variable</p>"; 
global $string;
global $text;
echo "<p>$string</p>"; echo "<p>$text</p>"; return $print;
}

function displayOutput1()
{
$output = printatext(); echo "<p>$output</p>";
}

function displayAText($text2)
{
switch ($text2)
{
case "1":
return "1"; break;
case "2":
return "2"; break;
case "3":
return "3"; break;
case "4":
    return "4"; break;
    default:
    return "No more digits."; break;
    }
    }
    
    function staticFun()
    {
    static $statVar = 2; echo "<p>$statVar</p>";
    $statVar = $statVar*2;
    }

    
    ?>
    