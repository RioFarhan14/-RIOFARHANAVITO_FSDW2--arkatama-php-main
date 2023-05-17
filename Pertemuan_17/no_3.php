<?php
//nilai default simbol adalah bintang
//nilai default row = 5
function printPattern($patternName, $rows = 5, $symbol = '*')
{
    switch ($patternName) {
        case 'downside_left':
            for ($i = $rows; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $symbol . " ";
                }
                echo "<br>";
            }
            break;
        case 'downside_right':
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = $i; $j < $rows; $j++) {
                    echo " &nbsp; &nbsp;";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo $symbol . " &nbsp;";
                }
                echo "<br>";
            }
            break;
        case 'upside_left':
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $symbol . " ";
                }
                echo "<br>";
            }
            break;
        case 'upside_right':
            for ($i = $rows; $i >= 1; $i--) {
                for ($j = $i; $j < $rows; $j++) {
                    echo " &nbsp;&nbsp; &nbsp;";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo $symbol . " &nbsp;";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Invalid pattern name!";
    }
}

// example
// printPattern('downside_left', 7, '#');
// printPattern('upside_right', 6, '+');
// printPattern('downside_right', 9, '-');
