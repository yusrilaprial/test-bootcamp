<?php
// Output:
// *
// *#
// *#%
// *#%*
// *#%*#
// *#%*#%
$n = 6;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j % 3 == 1) {
            echo "*";
        } elseif ($j % 3 == 2) {
            echo "#";
        } else {
            echo "%";
        }
    }
    echo "<br>";
}
?>