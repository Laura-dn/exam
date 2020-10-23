<?php
    $endTable = "</table>";

    switch($service) {
        case "haircut":
            $female = "<table class='index_5'><tr><th>Стрижки и укладки женские</th><th>грн</th></tr>";
            $man = "<table class='index_5'><tr><th>Стрижки мужские</th><th>грн</th></tr>";
            $table = getSeveralServices($price);
            $outData = $female . $table["second"] . $endTable . $man . $table["first"] . $endTable;
            echo $outData;
            break;
        case "coloring":
            $coloring = "<table class='index_5'><tr><th>Окрашивание волос</th><th>грн</th></tr>";
            $coloring .= getTable($price);
            echo $coloring .= $endTable;
            break;
        case "haircare":
            $haircare = "<table class='index_5'><tr><th>Уход за волосами</th><th>грн</th></tr>";
            $haircare .= getTable($price);
            echo $haircare .= $endTable;
            break;
        case "manicure":
            $manicure = "<table class='index_5'><tr><th>Маникюр</th><th>грн</th></tr>";
            $pedicure = "<table class='index_5'><tr><th>Педикюр</th><th>грн</th></tr>";
            $table = getSeveralServices($price);
            $outData = $manicure . $table["first"] . $endTable . $pedicure . $table["second"] . $endTable;
            echo $outData;
            break;
        case "cosmetology":
            $cosmetology = "<table class='index_5'><tr><th>Косметология и массажи</th><th>грн</th></tr>";
            $cosmetology .= getTable($price);
            echo $cosmetology .= $endTable;
            break;
        case "makeup":
            $makeup = "<table class='index_5'><tr><th>Визаж и дизайн бровей</th><th>грн</th></tr>";
            $makeup .= getTable($price);
            echo $makeup .= $endTable;
            break;
        default:
            $allServices = "<table class='index_5'><tr><th>Наши услуги</th><th>грн</th></tr>";
            $allServices .= getTable($price);
            echo $allServices .= $endTable;
            break;
    }

    function getTable($data)
    {
        $table = "";

        foreach($data as $value) {
            $table .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
        }

        return $table;
    }

    function getSeveralServices($data)
    {
        $arr = array(
            "first"  => "",
            "second" => ""
        );

        foreach($data as $value) {
            if($value["type"] === "M") {
                $arr["first"] .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
            } else {
                $arr["second"] .= "<tr><td>" . $value["serviceName"] . "</td><td>" . $value["price"] . "</td></tr>";
            }
        }

        return $arr;
    }
?>
