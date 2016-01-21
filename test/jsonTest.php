<?php

$contenuJSON = file_get_contents("http://donnees.ville.montreal.qc.ca/dataset/2980db3a-9eb4-4c0e-b7c6-a6584cb769c9/resource/18705524-c8a6-49a0-bca7-92f493e6d329/download/oeuvresdonneesouvertes.json");

$products = json_decode($contenuJSON, true);

foreach($products as $key => $val) {
    echo "$key<br>\n";
    foreach ($val as $key2 => $val2) {
        echo "... $key2 => $val2<br>\n";
    }
}

?>