<main class="index_12">
    <h2>Прайс</h2>

<?php
    switch($service) {
        case "haircut":
            include (ROOT . "/components/viewHaircut.php");
            break;
        case "coloring":
            include (ROOT . "/components/viewColoring.php");
            break;
        case "haircare":
            include (ROOT . "/components/viewHaircare.php");
            break;
        case "manicure":
            include (ROOT . "/components/viewManicure.php");
            break;
        case "cosmetology":
            include (ROOT . "/components/viewCosmetology.php");
            break;
        case "makeup":
            include (ROOT . "/components/viewMakeup.php");
            break;
        default:
            include (ROOT . "/components/viewAllServices.php");
            break;
    }
?>

    <p class="note index_5">* - стоимость зависит от категории мастера и количества материалов, затраченных на услугу.</p>
</main>
