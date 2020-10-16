<?php
    $manicure = "<table class='index_5'><tr><th>Маникюр</th><th>грн</th></tr>";
    $pedicure = "<table class='index_5'><tr><th>Педикюр</th><th>грн</th></tr>";
    $endTable = "</table>";

    foreach($price as $value) {
        if($value["type"] === "M") {
            $manicure .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
        } else {
            $pedicure .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
        }
    }

    $outData = $manicure . $endTable . $pedicure . $endTable;

    echo $outData;
?>
