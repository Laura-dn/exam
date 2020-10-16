<?php
    $female = "<table class='index_5'><tr><th>Стрижки и укладки женские</th><th>грн</th></tr>";
    $man = "<table class='index_5'><tr><th>Стрижки мужские</th><th>грн</th></tr>";
    $endTable = "</table>";

    foreach($price as $value) {
        if($value["type"] === "F") {
            $female .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
        } else {
            $man .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
        }
    }

    $outData = $female . $endTable . $man . $endTable;

    echo $outData;
?>
