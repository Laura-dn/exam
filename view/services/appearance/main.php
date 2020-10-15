<main class="index_12">
    <h2>Прайс</h2>

<?php
    switch($service[0]) {
        case "haircut":
            include (ROOT . "/components/viewHaircut.php");
            break;
        case "coloring":
            include (ROOT . "/components/viewColoring.php");
            break;
        default:
            echo "Цены временно не доступны. Уточняйте в салоне.";
            break;
    }
?>

    <p class="note index_5">* - стоимость зависит от категории мастера и количества материалов, затраченных на услугу.</p>
</main>
