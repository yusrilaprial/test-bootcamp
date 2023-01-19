<?php
// split subdomain from domain
$websites = [
    ["https://id.bitdegree.org"],
    ["https://finance.detik.com"],
    ["https://telkom.co.id"],
    ["https://corona.jakarta.go.id"]
];

foreach ($websites as $website) {
    $url = $website[0];
    preg_match("/^(?:https?:\/\/)?(?:[^@\/\n]+@)?(?:www\.)?([^:\/\n]+)/", $url, $matches);
    $subdomain = preg_split("/\./", $matches[1]);
    echo "Subdomain dari $url adalah $subdomain[0] <br>";
}

?>