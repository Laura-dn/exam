<?php
    $coloring = "<table class='index_5'><tr><th>Наши услуги</th><th>грн</th></tr>";
    $endTable = "</table>";

    foreach($price as $value) {
        $coloring .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
    }

    echo $coloring .= $endTable;
?>
