<?php
function printPattern($patternName, $rows)
{
    switch ($patternName) {
        case 'downside_left':
            for ($i = $rows; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case 'downside_right':
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i - 1; $j++) {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                for ($k = $i; $k <= $rows; $k++) {
                    echo "*&nbsp;&nbsp;";
                }
                echo "<br>";
            }
            break;
        case 'upside_left':
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case 'upside_right':
            for ($i = $rows; $i >= 1; $i--) {
                for ($j = 1; $j < $i; $j++) {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                for ($k = $i; $k <= $rows; $k++) {
                    echo "*&nbsp;&nbsp;";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Invalid pattern name!";
    }
}
// example:
// printPattern('upside_left', 5);
// printPattern('downside_left', 4);
// printPattern('upside_right', 6);
// printPattern('downside_right', 3);
