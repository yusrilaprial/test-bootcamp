<?php
$data = [
    ["row1", 2, "S"],
    ["row2", 2, "A"],
    ["row3", 1, "S"],
    ["row4", 3, "S"],
    ["row5", 1, "A"],
    ["row6", 4, "A"],
    ["row7", 5, "S"],
    ["row8", 5, "A"]
];

$result = array_fill(1, 5, ["", ""]);

foreach($data as $row) {
    if ($row[2] == "S") {
        $result[$row[1]][0] = $row[0];
    } else {
        $result[$row[1]][1] = $row[0];
    }
}

print_r($result);

?>